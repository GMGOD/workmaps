<?php
include 'conexion.php';

$test = new instance("localhost","workmaps");
$test->acti_codigos->insert(array(
"userid" => 1,
"cod" => 123,
"expira" => date(now()),
"listo" => 1
));
$test2 = $test->find();
foreach($test2 as $value){
var_dump($value);
}
?>