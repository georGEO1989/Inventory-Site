<?php
//require config.php once for optimization
require_once('includes/config.php');
$title = "Demo";
require('layout/header.php');
?>

<h2>Enter Scanners Here</h2>
<div class="col-lg-6 form">
	<form action="includes/add_scanner.php" method="POST">
		<label>Scanner Name</label>
		<input type="text" name="scanner_name" class="input">
		<div class="clearfix"></div>
		<br>
		<label>Scanner Serial Number</label>
		<input type="text" name="serial_number" class="input">
		<div class="clearfix"></div>
		<br>
		<label>IP Address</label>
		<input type="text" name="ip_address" class="input">
		<br>
		<input type="submit">
	</form>
</div>

<?php
require('layout/footer.php');
?>