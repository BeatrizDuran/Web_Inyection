<?php
 
$host = /*'us-cdbr-iron-east-05.cleardb.net';*/'localhost';
$db = /*'heroku_9fde041e6fcfdea';*/'SVC';
$user = /*'b258a6ea727c88';*/'root';
$passwd = /*'38017f82';*/'siqueirosuth19';

$conexion = mysqli_connect($host, $user, $passwd, $db);
if($conexion===false) {
  #echo $e->getMessage();
}
?>