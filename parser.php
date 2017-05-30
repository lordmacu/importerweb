<?php 

$archivo=file_get_contents("2.json");

var_dump(json_decode($archivo));
?>