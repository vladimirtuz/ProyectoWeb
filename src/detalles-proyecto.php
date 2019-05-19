<?php
session_start();
require("../db/db.php");
$conexion=mysqli_connect($servidor,$usuario,$password,$bd);
$id_proyecto=$_POST['id_proyecto'];
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

    </body>
</html>



