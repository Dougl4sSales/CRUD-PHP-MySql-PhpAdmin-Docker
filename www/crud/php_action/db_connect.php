<?php
// Conexão com o banco de Dados
$servername = "db";
$username = "root";
$password = "root";
$db_name = "crud";

$connect = mysqli_connect($servername, $username, $password, $db_name);
mysqli_set_charset($connect, 'UTF-8');

if(mysqli_connect_error()):
    echo "Falha de Conexão".mysqli_connect_error();
endif;