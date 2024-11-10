<?php
	require ('../config/config.php');
	$location = $_POST['location'];
	$vehicleCode = $_POST['vehicleCode'];
	$quantity = $_POST['quantity'];
	$materialCode = $_POST['materialCode'];

	if(isset($_POST['location']) || isset($_POST['vehicleCode']) || isset($_POST['quantity']) || isset($_POST['materialCode'])){
		$dbConnection->query("
	    INSERT INTO tb_fuels (vehicleCode, quantity, materialCode, location)
	    VALUES ('$vehicleCode', '$quantity', '$materialCode', '$location');
		");

		header('Location: ' . $relativePath . '/public/index.php?menu=sucess');
		exit();
	}
	

	if (isset($_POST['del_id'])) {
	    $del_id = $_POST['del_id'];

	    $dbConnection->query("
	        DELETE FROM tb_fuels WHERE id = $del_id;
	    ");
	    header('Location: ' . $relativePath . '/public/index.php?menu=sucess');
	    exit();
	}
	
	exit();
?>