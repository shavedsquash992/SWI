<?php

include_once('./conexao.php');


if(isset($_POST)){
    if($_POST['gravar']==='grava'){
        $query = 'INSERT INTO exercicio (nome, sobrenome, telefone) VALUES (:nome,:sobrenome,:telefone)';
        $resultado = $conexao->prepare($query);
        $resultado->bindParam(":nome",$_POST['nome']);
        $resultado->bindParam(":sobrenome",$_POST['sobrenome']);
        $resultado->bindParam(":telefone",$_POST['telefone']);
        $resultado->execute();
        header('location:../index.php');}
        try {
        $resultado->execute();}catch(\Throwable $th){echo 'nao';}
}