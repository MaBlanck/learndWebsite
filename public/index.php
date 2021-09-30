<?php
require_once(__DIR__ . '../../config/config.php');
require(APP_ROOT . 'views/parts/header.php');
//Page Home
if (empty($_GET['view']) || $_GET['view'] === 'home') {
    require(APP_ROOT . 'views/home.php'); 
    //Page erreur
} else {
    require(APP_ROOT . 'views/error404.php');
}
require(APP_ROOT . 'views/parts/footer.php');