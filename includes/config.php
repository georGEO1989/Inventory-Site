<?php
//database objects
define('DBHOST', '127.0.0.1');
define('DBNAME', 'test_scanner');
define('DBUSER', 'root');
define('DBPASS', '');
//create connection to the incoming database
try {
	$db = new PDO('mysql:' . DBHOST . ';port=3307;dbname=' . DBNAME, DBUSER, DBPASS, array(
		PDO::ATTR_PERSISTENT => true
		));
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {	//exception for the database
	print "Error!:" . $e -> getMessage() . "\n";
	print 'This is the start of the script';
}
?>