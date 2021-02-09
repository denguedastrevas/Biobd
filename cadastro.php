<?php

include_once("conexao.php");

$nome =  $_POST['nome'];
$senha = $_POST['senha'];
$email = $_POST['email'];
$bolsa = $_POST['bolsa'];
$orientador = $_POST['orientador'];
$coorientador = $_POST['coorientador'];
$graduacao = $_POST['graduacao'];


$sql = "INSERT INTO login (`nome`, `senha`, `email`, `bolsa`, `orientador`, `coorinetador`, `graduacao`) values ('$nome','$senha','$email','$bolsa','$orientador','$coorientador','$graduacao)";
$salvar = mysqli_query($conexao,$sql);
?>