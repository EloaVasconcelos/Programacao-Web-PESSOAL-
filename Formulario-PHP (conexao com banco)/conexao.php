<?php
$servidor = "localhost";
$usuario = "root";
$senha = "VMeloa44@bd.2023";
$banco = "dbBDPWA";

$cn = new PDO("mysql:host=$servidor;dbname=$banco",$usuario,$senha);

?>