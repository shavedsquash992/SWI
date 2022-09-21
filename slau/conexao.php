<?php   
    $host="localhost";
    $dbname="tarefas";
    $user="root";
    $pass="";

try{$conexao= new PDO("mysql:host=$host;dbname=$dbname",$user,$pass);}
catch(PDOException $th){$error=$th->getMessage();}
?>