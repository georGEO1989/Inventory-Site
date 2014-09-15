<?php
require_once('config.php');

class CreateCatagory {
	function catagory() {
		$new_catagory = $_POST['new_catagory'];
		$create = 
		// variables for the form and validations
		if (!empty($_POST['category_name']) ) {
			$category_name = $_POST['category_name'];
		} else {
			$category_name = NULL;
			print "Please enter in Category Name";
		}
		if (!empty($_POST['quantity']) ) { 
			$serial_number = $_POST['quantity'];
		} else {
			$serial_number = NULL;
			print "Please enter in quantity";
		}
		if (!empty($_POST['category_type']) ) {
		    $ip_address = $_POST['ip_address'];
		} else {
		    $ip_address = NULL;
		    print "Please enter the type of product.";
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
		}
}
?>