<?php session_start(); 
?>
<html>
<style>
input[type=text], select {
    width: 88%;
    padding: 5px 5px;
    margin: 5px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=password], select {
    width: 88%;
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
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    background-color:transparent;
}
</style>
<head>
    <title>Iniciar sesi&oacute;n</title>
</head>
 
<body>
<?php
include("config.php");
if(isset($_GET['Acceder'])) {
$user = $_GET['ClaveElector'];
$pass = $_GET['PasswordCiudadano'];

$query = "SELECT * FROM usuarios WHERE ClaveElector='$user' AND PasswordCiudadano='$pass'";
$result =  mysqli_query($conexion,$query);
$rows = mysqli_fetch_assoc($result);

if($rows>0){
  #echo $query;
   header("location: Consulta.php");
}
else{
   echo "<script>alert('Usuario o contraseña incorrectos.');</script>";
}
#mysqli_free_result($result);
#mysqli_close($conexion);

    #$user = $_GET['ClaveElector'];
    #$pass = $_GET['PasswordCiudadano'];
    #if($user == "" || $pass == "") {
        #echo "Hay campos vac&iacute;Â­os.";
    #} else {
      #$sql = "SELECT * FROM usuarios WHERE ClaveElector='$user' AND PasswordCiudadano='$pass'";
        //echo $sql;
        #$result = mysqli_query($conexion, $sql);

        #or die("No se pudo ejecutar la query.");
       
        
        #$row = mysqli_fetch_assoc($result);
        #$_SESSION['valid']=null;
        #if(is_array($row) && !empty($row)) {
            #$validuser = $row['ClaveElector'];
             #$_SESSION['valid'] = $validuser;
             #$_SESSION['PasswordCiudadano'] = $row['PasswordCiudadano'];
             #$_SESSION['id_usuario'] = $row['id_usuario'];
             

            #} else {
          
            #echo "<script>alert('Usuario o contrase&ntilde;a incorrectos.');</script>";
                       # echo "<br/>";
           # echo "<a href='index.php'>Regresar</a>";
        #}
 
        #if(isset($_SESSION['valid'])) {         
         #header('Location: Consulta.php');            
        #}
} else {
?>
    <form name="fIndex" method="get" action="index.php">
        <table  height="50%" width="30%" align="center" style="border:WindowFrame thin solid;font:caption;margin:auto">
            <tr>
                 <td colspan="2" align="center" width="30%"><a><img src="imagenes/logitovotitoooooooooo.png"></a></td>
            </tr>
            <tr>
                <td align="center" colspan="2" style="font-size:xx-large">Iniciar sesi&oacute;n</td>
            </tr>
            <tr> 
                <td width="45%" align="right" bordercolor="teal">Clave de elector:</td>
                <td style="border-collapse:separate"><input type="text" name="ClaveElector" id="ClaveElector"></td>
            </tr>
            <tr> 
                <td width="45%" align="right">Contrase&ntilde;a:</td>
                <td><input type="password" name="PasswordCiudadano"id="PasswordCiudadano"></td>
            </tr> 
            <tr>
                <td>  .</td>
                <td>  .</td>
            </tr>
            <tr>
                <td align="center" colspan="2">
				<input style="color:black;background-color:rgb(69,119,224)" type="submit" name="Acceder" value="Acceder"></td>
            </tr>
        </table>

    </form>
<?php
}
?>
</body>
</html>