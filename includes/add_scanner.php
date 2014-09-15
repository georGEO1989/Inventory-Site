<?php
require_once('config.php');
// variables for the form and validations
if (!empty($_POST['scanner_name']) ) {
	$scanner_name = $_POST['scanner_name'];
} else {
	$scanner_name = NULL;
	print "Please enter in Scanner Name";
}
if (!empty($_POST['serial_number']) ) { 
	$serial_number = $_POST['serial_number'];
} else {
	$serial_number = NULL;
	print "Please enter in Serial Number";
}
if (!empty($_POST['ip_address']) ) {
    $ip_address = $_POST['ip_address'];
} else {
    $ip_address = NULL;
    print "Please enter IP Address";
}


// SQL Statement

    $STH = $db->prepare("INSERT INTO `scanners` (`scanner_name`, `serial_number`, `ip_address`) VALUES (:scanner_name, :serial_number, :ip_address)");

    // validation for inserting into the table
    if (!$STH) {
        echo "\nPDO::errorInfo():\n";
        print_r($db->errorInfo());
    }
    // binds the scanner objects and makes them strings
    $STH->bindParam(':scanner_name', $scanner_name,PDO::PARAM_STR); 
    $STH->bindParam(':serial_number', $serial_number,PDO::PARAM_INT);
    $STH->bindParam(':ip_address', $ip_address,PDO::PARAM_STR);
    if (!$STH->execute()) {
        echo "\nPDO::errorInfo():\n";
        print_r($db->errorInfo());
    }
    // close the databse connection
    $db = null;   

    header('Location: http://localhost/test/scannercheckout/scanners.php');
?>