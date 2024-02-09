<?php

$serverName = 'localhost';
$userName = 'root';
$password = 'devOPS26WDA@';
$dbName = 'crud';

$connect = mysqli_connect($serverName, $userName, $password, $dbName);

if (mysqli_connect_error()) echo 'Erro na conexão: '.mysqli_connect_error();

?>