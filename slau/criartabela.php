<?php   
    $host="localhost";
    $dbname=$_POST['banco'];
    $user="root";
    $pass="";

try{$conexao= new PDO("mysql:host=$host;dbname=$dbname",$user,$pass);
    echo "Banco ".$dbname." conectado coms uceso";
}
catch(PDOException $th){}

if($conexao){
    $texto="CREATE TABLE IF NOT EXISTS ".$_POST['tabela']." (
        ".$_POST['campo']." ".$_POST['tipo']." NOT NULL AUTO_INCREMENT,
        ".$_POST['campo2']." VARCHAR(255),
        PRIMARY KEY (".$_POST['campo'].")
    )";
    $acao=$conexao->prepare($texto);
    try{
        $acao->execute();
        echo "tabvela ".$_POST['banco']." criada com suceso";
    }catch(PDO $th){
        echo $th.getMessage();
    }
}
?>