<?php

if(isset($_POST['rut']) && isset($_POST['nombres'])){
    require_once(DAO . 'conexion.php');




    $stmt = $gbd->prepare('INSERT INTO tbl_usuarios (rut , nombres) values (:rut , :nombres)');
    $stmt->execute(
        ['rut' => $_POST['rut'],]);

        $stmt->execute(
            ['nombres' => $_POST['nombres'],]);
      




    $host = $_SERVER['HTTP_HOST'];
    $ruta = rtrim(dirname(dirname($_SERVER['PHP_SELF'])), '/\\');
    $url = "http://$host/$ruta/registrar.php";
    header("Location: $url");
    die();

}


?>