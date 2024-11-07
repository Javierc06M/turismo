<?php

$uri = $_SERVER['REQUEST_URI'];

if($uri == '/turismo/public/'){
    require_once '../views/inicio.php';
}

?>