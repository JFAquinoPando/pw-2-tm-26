<?php

header("Content-Type: application/json");

$id = isset($_GET["id"]) ? $_GET["id"] : "ID";
$nombre = isset($_GET["nombre"]) ? $_GET["nombre"] : "NAME";

echo json_encode([
    "identificador"=> $id,
    "nombre"=> $nombre
]) ;
    