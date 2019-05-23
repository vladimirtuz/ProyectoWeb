<?php
session_start();
require("../db/db.php");
$conexion=mysqli_connect($servidor,$usuario,$password,$bd);
$id_proyecto=$_POST['id_proyecto'];
$sentencia="select *from proyectos where id_proyecto=$id_proyecto";
$execute=mysqli_query($conexion,$sentencia);
if($fila=mysqli_fetch_assoc($execute)){
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>Catalogo</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    
</head>
    <body>
        <div class="row">
             <div class="col-md-4">
				<img src="../img/logos/logotecnm.png" width="50%">
			</div>

			<div class="col-md-4">
    			<img src="../img//logos/logosep.png" width="50%">
			</div>

			<div class="col-md-4">
                <img src="../img/logos/logotec.png" width="50%">
             </div>     
       </div>

        <div class="row">
            <div class="col-md-12" style="text-align:center;">
              <h1> Informacón del proyecto </h1>
            </div>
            <div class="col-md-12"> <h3>Nombre del proyecto: <?php  echo $fila['nombre']; ?> <h3></div>
            <div class="col-md-6"> <h3>Departamento: <?php  echo $fila['departamento']; ?> <h3></div>
            <div class="col-md-6"> <h3>Division: <?php  echo $fila['division']; ?> <h3></div>
            <div class="col-md-6"> <h3>Responsable: <?php  echo $fila['nombre_responsable']; ?> <h3></div>
            <div class="col-md-6"> <h3>Cargo: <?php  echo $fila['cargo_responsable']; ?> <h3></div>
            <div class="col-md-12" style="text-align:center"><h3>Objetivo</h3></div>
            <div class="col-md-12"><p><?php echo $fila["objetivo_general"] ?></p> </div>


        </div>
    </body>
</html>
<?php  }  ?>


