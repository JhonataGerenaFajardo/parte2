<?php
        $id=$_GET['id'];
        include("conexion.php");


       $sql="delete from base where id='".$id."'";
       $resultado=mysqli_query($conexion,$sql);
       if($resultado){
            echo "<script language='javaScript'>
                    alert('los datos se eliminaron correctamente'); location.assign('index.php'); </script>";

       }else{
            echo "<script language='javaScript'>
                    alert('los datos NO se eliminaron correctamente'); location.assign('index.php'); </script>";


       }


?>
