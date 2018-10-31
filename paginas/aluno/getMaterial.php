<?php
    session_start();
    require '../../libs/db.class.php';
    $objDb = new db();
    $link = $objDb->conecta_mysql();
    $sqlMateriais = "SELECT * FROM materiais WHERE id = '" . $_GET["id"] . "'";    
    $res = mysqli_query($link,$sqlMateriais);
    while($colunaMateriais = $res->fetch_assoc()){$colunaMat[] = $colunaMateriais;}
    foreach($colunaMat as $materiais) {
?>
<object class="browser-default" style="width:100%; height:300px; margin: auto;" data="materiais/<?php echo $materiais['curso'] ?>/<?php echo $materiais['arquivo']?>"></object>
<?php
    }
?>