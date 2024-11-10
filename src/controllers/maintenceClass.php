<?php
	require ('../config/config.php');
	$model = $_POST['model'];
	$vehicleCode = $_POST['vehicleCode'];
	$registrationDate  = $_POST['registrationDate'];
	$issue  = $_POST['issue'];

	$dbConnection->query("
    INSERT INTO tb_maintences (model, vehicleCode, registrationDate, issue)
    VALUES ('$model', '$registrationDate', '$year', '$issue');
	");


	header('Location: ' . $relativePath . '/public/index.php?menu=sucess');
	exit();

?>