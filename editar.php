<?php
    include("conexion.php");
?>


<html>
<head>
    <title>EDITAR</title>
    <link rel="stylesheet" type="text/css" href="stilos.css">
</head>
<body>
    <?php
        if(isset($_POST['enviar'])){

            $id=$_POST['id'];
            $NoCedula=$_POST['NoCedula'];
            $nombre=$_POST['nombre'];
            $apellido=$_POST['apellido'];
            $NoTelefono=$_POST['NoTelefono'];
            $email=$_POST['email'];
            $fechaDeConsulta=$_POST['fechaDeConsulta'];

            $sql="update base set NoCedula='".$NoCedula."',nombre='".$nombre."',apellido='".$apellido."',NoTelefono='".$NoTelefono."',email='".$email.'",fechaDeConsulta="'.$fechaDeConsulta."' where id='".$id."'";
            $resultado=mysqli_query($conexion,$sql);

            if ($resultado){

                echo"<script language='JavaScript'>
                    alert('los datos se actualizaron correctamente');
                    location.assign('index.php');
                    </script>";

                }else{

                    echo"<script language='JavaScript'>
                    alert('los datos NO se actualizaron correctamente');
                    location.assign('index.php');
                    </script>";
                }

        }else{

            $id=$_GET['id'];
            $sql="select * from base where id='".$id."'";
            $resultado=mysqli_query($conexion,$sql);
        
            $fila=mysqli_fetch_assoc($resultado);
            $NoCedula=$fila["NoCedula"];
            $nombre=$fila["nombre"];
            $apellido=$fila["apellido"];
            $NoTelefono=$fila["NoTelefono"];
            $email=$fila["email"];
            $fechaDeConsulta=$fila["fechaDeConsulta"];

            mysqli_close($conexion);
        }
    ?>

    <h1>EDITAR DATOS DE CLIENTE</h1>
    <form action="<?=$_SERVER['PHP_SELF'] ?>" method="post"> 
        <label>NoCedula;</label>
        <input type="text" name="NoCedula" value="<?php echo $NoCedula; ?>"> <br>      

        <label>Nombre;</label>
        <input type="text" name="nombre" value="<?php echo $nombre; ?>"> <br>

        <label>apellido;</label>
        <input type="text" name="apellido" value="<?php echo $apellido; ?>"> <br>

        <label>NoTelefono;</label>
        <input type="text" name="NoTelefono" value="<?php echo $NoTelefono; ?>"> <br>

        <label>email;</label>
        <input type="text" name="email" value="<?php echo $email; ?>"> <br>

        <label>fechaDeConsulta;</label>
        <input type="text" name="fechaDeConsulta" value="<?php echo $fechaDeConsulta; ?>"> <br>

        <input type="hidden" name="id" value=<?php echo $id; ?>">

        <input type="submit" name="enviar" value="ACTUALIZAR">
        <a href="index.php">Regresar</a>


    </form>

    <?php 


    ?>        
</body>
</html>