<?php
// Conexão com o banco de dados
$servername = "db";
$username = "root";
$password = "root";
$db_name = "sistemalogin";

$connect = mysqli_connect($servername, $username, $password, $db_name);

if(mysqli_connect_error()):
    echo "Falha de Conexão".mysqli_connect_error();
endif;