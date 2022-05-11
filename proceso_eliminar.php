<?php
   include("database.php");
   $juegos = new Database();
if(isset($_GET["id"]) && !empty($_GET["id"])){
    $id = $juegos->sanitize($_GET["id"]);
    $res = $juegos->eliminarJuego($id);
    if($res){
        header("location: ../mostrarJuegos.php?msg=3");
    }else{
        header("location: ../mostrarJuegos.php?msg=6");
    }
}
    
?>