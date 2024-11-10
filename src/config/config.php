<?php
	
	$basePath = realpath(__DIR__ . '/../../');
	$routerPath = $basePath . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'routes.php';
	$relativePath = 'http://127.0.0.1:8080/edsa-FleetTrack/';

	//
	$hostname = 'localhost';
	$db = 'db_fleettrack';
	$user = 'root';
	$password = '';

	$dbConnection = new mysqli($hostname, $user, $password);
	$dbConnection->query('CREATE DATABASE IF NOT EXISTS db_fleettrack;');
	$dbConnection->select_db('db_fleettrack');
	$dbConnection->query('
	    CREATE TABLE IF NOT EXISTS tb_users (
        id INT PRIMARY KEY AUTO_INCREMENT,
        username VARCHAR(50) NOT NULL,
        email VARCHAR(100) NOT NULL,
        password VARCHAR(255) NOT NULL
    	);
	');

	$dbConnection->query('
	    CREATE TABLE IF NOT EXISTS tb_fuels (
	    id INT PRIMARY KEY AUTO_INCREMENT,
	    vehicleCode VARCHAR(32) NOT NULL,
	    quantity INT NOT NULL,
	    materialCode INT NOT NULL,
	    location VARCHAR(255) NOT NULL
		);
	');

	$dbConnection->query('
	    CREATE TABLE IF NOT EXISTS tb_vehicles (
	    id INT PRIMARY KEY AUTO_INCREMENT,
		model VARCHAR(32) NOT NULL,
		plate VARCHAR(32) NOT NULL,
		vehicleCode VARCHAR(32) NOT NULL,
		year VARCHAR(32) NOT NULL,
		kilometer INT NOT NULL
		);
	');

	$dbConnection->query('
	    CREATE TABLE IF NOT EXISTS tb_maintences (
	    id INT PRIMARY KEY AUTO_INCREMENT,
		model VARCHAR(32) NOT NULL,
		vehicleCode VARCHAR(32) NOT NULL,
		registrationDate VARCHAR(32) NOT NULL,
		issue VARCHAR(256) NOT NULL
		);
	');



	$tbVehiclesCount = $dbConnection->query('SELECT COUNT(*) as count FROM tb_vehicles')->fetch_assoc()['count'];
	$tbMaintencesCount = $dbConnection->query('SELECT COUNT(*) as maintence FROM tb_maintences')->fetch_assoc()['maintence'];

?>
