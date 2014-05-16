<?php
include '../db/consultas.php';
include '../session.php';
$objDB = new consultas;
$lista = $objDB->getBrowser();
echo $lista['userAgent'].'<br>';
echo $lista['name'].'<br>';
echo $lista['version'].'<br>';
echo $lista['pattern'].'<br>';
$lista = $objDB->getOs();
echo $lista.'<br>';
echo $objDB->getRealIP();
?>