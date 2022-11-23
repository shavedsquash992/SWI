<?php include_once('conexao.php');
    $query="SELECT * FROM categorias";
    $resultado=$conexao->prepare($query);
    $resultado->execute();
    $tarefas=[];
    $tarefas=$resultado->fetchAll();
?>
<form action="#" method="get">
    <fieldset>
        <legend>Tipo de listagem HTML</legend>
        <select name="categoria" id="">
            <?php if(count($tarefas)>0){
                  foreach($tarefas as $registro){?>
            <option value="<?php echo $registro["id"];?>">
            <?php echo $registro["categoria"];?>
            </option>
            <?php }}?>
        </select>
        <input type="submit" value="Enviar">
    </fieldset>
</form>