<?php

require_once "autoloader.php";

$data = new Modelo();
$conn = $data->getConn();
$products = $data->getAllProducts();
$products = $data->showAllProducts();


?>