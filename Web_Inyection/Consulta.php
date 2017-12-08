<?php
//including the database connection file
include_once("config.php");
//fetching data in descending order (lastest entry first)
$result = $conexion->query("SELECT * FROM quejas_sugerencias");
//echo "xonexion ".$result;
?>
<html>
<style>
input[type=text], select {
    width: 100%;
    padding: 5px 5px;
    margin: 5px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 7px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    background-color:transparent;
}

tr:nth-child(even){background-color: #f2f2f2;}
</style>
<head>    
    <title>Pagina de inicio</title>
     <link rel="stylesheet" href="css/bootstrap.css">

</head>
<body>

<h3 align="center" style="font-style:normal" style="font-size:xx-large" >QUEJAS Y SUGERENCIAS</h3>
<form action="Read.php" method="get" name="fConsulta">
        <table width="70%" border="0" style="font-style:normal" align="center" height="10%">
            <tr> 
                <td width="20%">Ingrese el nombre:</td>
                <td align="left" width="40%">Ingrese la descripci&oacute;n:</td>
                <td>Ingrese la fecha:</td>                 
            </tr>            
            <tr> 
                <td width="20%" height="30%"><input type="text" name="NombreUsuario" id="NombreUsuario"></td>
                <td width="20%"><input type="text" name="Descripcion" id="Descripcion"></td>
                <td><input type="text" name="Fecha" id="Fecha"></td>
                
                <td><input style="background-color:rgb(69,119,224)" type="submit" name="Submit" value="Consultar" id="Submit"></td>
            </tr>
         </table>
    </form>

    <table width='70%' border=0 style="font:caption" align="center">
    <tr bgcolor='#CCCCCC'>
        <td>Nombre del usuario</td>
        <td>Descripci&oacute;n</td>
        <td>Fecha</td>
    </tr>
        <?php     
    //while($row = $result->fetch(PDO::FETCH_ASSOC)) {  
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
    {
        echo "<tr>";
        echo "<td>".$row['NombreUsuario']."</td>";
        echo "<td>".$row['Descripcion']."</td>";
        echo "<td>".$row['Fecha']."</td>";    
    }
    ?>
    </table>
    <table style="border:0" align="center" height="30%">
    <tr>
      <td><a href="index.php">Volver al login</a>
    </tr>  
    </table>
</body>
</html>