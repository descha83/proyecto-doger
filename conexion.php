<?php

$dsn = "mysql:host=localhost;dbname=proyecto_dogers;port=3306";
$opt = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
global $base;
$base = new PDO($dsn, 'maria', 'rocko1', $opt); //se conecta a la base de datos y me devuelve un objeto PDO que me sirve para correr consultas en esa base de datos

?>
