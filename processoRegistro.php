<?php
session_start();
include_once("./model/ConexaoMySQL.php");

$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_EMAIL);

//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$result_usuario = "INSERT INTO usuarios (email, senha, created) VALUES ('$email', '$senha', NOW())";
?>
