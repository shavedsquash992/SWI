<?php

$host = "localhost";
$dbname = "aula3108";
$user = "root";
$pass = "";

try {

$conexao = new PDO("mysql:host=$host;dbname=$dbname",$user,$pass);
//$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $th) {
//se algum erro ao conectar ao banco
$error = $th->getMessage();
echo "Erro ao conectar no banco de dados: $error";
}