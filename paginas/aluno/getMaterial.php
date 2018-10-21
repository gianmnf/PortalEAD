<?php
    require '../../libs/db.class.php';
    $objDb = new db();
    $link = $objDb->conecta_mysql();
    $sqlMateriais = "SELECT * FROM materiais WHERE id = '" . $_GET["id"] . "'";
    $res = mysqli_query($link,$sqlMateriais);
    while($colunaMateriais = $res->fetch_assoc()){ $colunaMat[] = $colunaMateriais; }
    if(!empty($res)) 
    {
?>
<object class="browser-default" width="100%" height="300px" data="materiais/Sistemas/<?php echo $colunaMat['arquivo']?>"></object>
<?php 
    }
?>