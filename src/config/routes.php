<?php
require_once('config.php');

$menuOptions = isset($_GET['menu']) ? $_GET['menu'] : 'dashboard';

if (!empty($menuOptions)) {
    switch ($menuOptions) {
        case 'index':
            include $basePath . '/src/views/dashboard.php'; 
            exit;

        case 'fuel':
            include $basePath . '/src/views/fuelForm.php'; 
            exit;

        case 'maintence':
            include $basePath . '/src/views/maintenceForm.php'; 
            exit;

        case 'stock':
            include $basePath . '/src/views/stockForm.php'; 
            exit;

        case 'vehicle':
            include $basePath . '/src/views/vehicleForm.php';
            exit;

        case 'sucess':
            include $basePath . '/src/views/sucessfull.php';
            exit;

        default:
            include $basePath . '/src/views/404.php';
            break;
    }
} else {
    echo 'GET não inicializada.';
    exit();
}
?>
