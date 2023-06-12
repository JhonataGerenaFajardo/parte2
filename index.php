<html>
<head>
    <title>lista de clientes</title>
    <script type="text/javascript">
            function confirmar (){
                return confirm('esta seguro de borrar este usuario?');
             }
     </script>   
      <link rel="stylesheet" type="text/css" href="stilos.css">     
</head>
<body>

<?php

    include("conexion.php");
    $sql="select * from base";
    $resultado=mysqli_query( $conexion, $sql);
?>



        <h1>LISTA DE CLIENTES AGENDADOS</h1>
        <a class=clientenuevo href="agregar.php">Agendar nuevo cliente</a><br><br>
        <table>
            <thead>
                   <tr> 
                   <th>No</th>
                    <th>No.cedula</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>No.Contacto</th>
                    <th>Correo</th>
                    <th>fecha de la cita</th>
                    <th>ACCIONES</th>
                   </tr> 
            </thead>
            <tbody>
                <?php
                    while($filas=mysqli_fetch_assoc($resultado)){
                ?>

                  <tr>
                    <td> <?php echo $filas['id'] ?> </td>
                    <td> <?php echo $filas['NoCedula'] ?> </td>
                    <td> <?php echo $filas['nombre'] ?> </td>
                    <td> <?php echo $filas['apellido'] ?> </td>
                    <td> <?php echo $filas['NoTelefono'] ?> </td>
                    <td> <?php echo $filas['email'] ?> </td>
                    <td> <?php echo $filas['fechaDeConsulta'] ?> </td>
                    <td>
<?php echo"<a href='editar.php?id=".$filas['id']."'>EDITAR</a>"; ?>
                       -
<?php echo"<a href='eliminar.php?id=".$filas['id']."' onclick='return confirmar()'>ELIMINAR</a>"; ?> 
                 
                    </td>
                  </tr>
                <?php
                } 
                ?>
                  
            </tbody>
        </table>
                <?php
                    mysqli_close($conexion);
                ?>

</body>


</html>