<?php
include_once("config.php");
    $NombreUsuario = $_GET['NombreUsuario'];
    $Descripcion = $_GET['Descripcion'];
    $Fecha = $_GET['Fecha'];
    $sql = "SELECT * FROM quejas_sugerencias WHERE NombreUsuario='$NombreUsuario' 
    "OR Descripcion='$Descripcion' OR Fecha='$Fecha'";
    #echo $sql;
    $datos = mysqli_query($conexion,$sql) or die ("Error en la consulta");
    #$query = $conexion->prepare($sql);
    $r=mysqli_num_rows($datos);
    ?>
<html>
<style>
tr:nth-child(even){background-color: #f2f2f2;}
</style>
<head>
    <title>Consultar</title>
</head>
 
<body>
     <table>
     <?php
    if($r>0){
        echo "
        <h1 style=font-style:normal>Quejas y sugerencias de la consulta<h1>
        <table>
        <thead>
        <tr>
            <th>Nombre</th>
            <th>Descripci&oacute;n</th>
            <th>Fecha de registro</th>
        </tr>
        </thead>";
        echo"<br>";
        while ($filas=mysqli_fetch_assoc($datos)) {
            echo "<tr><td>".$filas["NombreUsuario"]."</td>";
            echo "<td>".$filas["Descripcion"]."</td>";		
            echo "<td>".$filas["Fecha"]."</td></tr>";
        }echo "</table>";
     }else{
        echo "Los campos no existe.";
     }
    //echo "<font color='green'>Data added successfully.";
    echo "<br/><a href='Consulta.php'>Volver a la consulta</a>";
?>
</table>
</body>
</html>    