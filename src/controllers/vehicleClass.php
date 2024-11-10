<?php
	require ('../config/config.php');
	$model = $_POST['model'];
	$plate  = $_POST['plate'];
	$vehicleCode = $_POST['vehicleCode'];
	$year = $_POST['year'];
	$kilometer  = $_POST['kilometer'];

	if(isset($_POST['model']) || isset($_POST['plate']) || isset($_POST['vehicleCode']) || isset($_POST['year']) || isset($_POST['kilometer'])){
		$dbConnection->query("
	    INSERT INTO tb_vehicles (model, plate, vehicleCode, year, kilometer)
	    VALUES ('$model', '$plate', '$vehicleCode', '$year', '$kilometer');
		");

		header('Location: ' . $relativePath . '/public/index.php?menu=sucess');
		exit();
	}

	if (isset($_POST['del_id'])) {
	    $del_id = $_POST['del_id'];

	    $dbConnection->query("
	        DELETE FROM tb_vehicles WHERE id = $del_id;
	    ");
	    header('Location: ' . $relativePath . '/public/index.php?menu=sucess');
	    exit();
	}
	


	header('Location: ' . $relativePath . '/public/index.php?menu=sucess');
	exit();

?>