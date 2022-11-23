<?php   
    $host="localhost";
    $dbname="listagemphp";
    $user="root";$pass="";
try{$conexao=new PDO("mysql:host=$host; dbname=$dbname",$user,$pass);}
catch(PDOExcepiton $th){
    $error=$th->getMessage();
    echo"Erro ao conectar no banco de dados:".$error;
}