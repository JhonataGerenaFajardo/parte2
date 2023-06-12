
<html>

<head>
    <title>AGREGAR</title>
    <link rel="stylesheet" type="text/css" href="stilos.css">
</head>
<body>
<?php
        if(isset($_POST['enviar'])){
            $NoCedula=$_POST['NoCedula'];
            $nombre=$_POST['nombre'];
            $apellido=$_POST['apellido'];
            $NoTelefono=$_POST['NoTelefono'];
            $email=$_POST['email'];
            $fechaDeConsulta=$_POST['fechaDeConsulta'];

            include("conexion.php");
            $sql="insert into base(NoCedula,nombre,apellido,NoTelefono,email,fechaDeConsulta)
            values( '$NoCedula', '$nombre', '$apellido', '$NoTelefono', '$email', '$fechaDeConsulta')"; 

            $resultado=mysqli_query($conexion,$sql);

            if($resultado){

              echo " <script language='javaScript'>
                     alert('Los datos fueron ingresados correctamente a la BD');
                     location.assing('index.php');
                     </script>";  

            }else{
              echo " <script language='javaScript'>
                     alert('ERROR: Los datos NO fueron ingresados a la BD');
                     location.assing('index.php');
                     </script>";     
            }    
            mysqli_close($conexion);       
        }
    ?>


    <h1>AGENDAR NUEVO CLIENTE</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <label>NoCedula:</label>
        <input type="text"  name="NoCedula"> <br>
        <label>nombre:</label>
        <input type="text"  name="nombre"> <br>
        <label>apellido</label>
        <input type="text" name="apellido"> <br>
        <label>NoTelefono</label>
        <input type="text" name="NoTelefono"> <br>
        <label>email</label>
        <input type="text" name="email"> <br> 
        <label>fecha de consulta</label>
        <input type="date" name="fechaDeConsulta"> <br> 
        <input type="submit" name="enviar" value="AGREGAR">
        <a href="index.php">regresar</a>                  
    </form>
</body>
</html>