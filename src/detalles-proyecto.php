<?php
session_start();
require("../db/db.php");
$conexion=mysqli_connect($servidor,$usuario,$password,$bd);
$id_proyecto=$_POST['id_proyecto'];
if($_SESSION!=null)
echo $id_proyecto;
else
echo "Error";
?>



