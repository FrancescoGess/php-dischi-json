<?php 
//trasformo in stringa il file json
$string = file_get_contents("dischi.json");

// var_dump($string)


$stringArray = json_decode($string, true);

header('Content-Type: application/json');

echo json_encode($stringArray);
?>