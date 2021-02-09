<?php
$servername = "localhost";
$database = "biobd";
$username = "root";
$password = "";

$conexao = mysqli_connect($servername,$username,$password,$database);

if (!$conexao) {
   print "Falha na conexão com o banco de Dados";
}

