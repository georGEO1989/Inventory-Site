<?php
require_once('includes/config.php');
$title = "Scanners";
require('layout/header.php');
// use this is display the scanners in the database
?>

<?php
$sql = "SELECT * FROM scanners";

print '<table border="1" class="table"><th>ID</th><th>Scanner Name</th><th>Serial Number</th><th>IP Address</th>';

foreach ($db -> query($sql) as $row) {
	$scanner_link = $row['scanner_id'];
	print '<tr><td>' . $scanner_link . '</td><td><a href="' . $scanner_link . '">' . $row['scanner_name'] . '</a></td><td>' . $row['serial_number'] . '</td><td>' . $row['ip_address'] . '</td></tr>' . '<br />';
}

print '</table>';

$db = null;
?>
<?php
require('layout/footer.php');
?>