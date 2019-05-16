<!DOCTYPE html>
<html>
<head>
	<title>Anteproyectos ITC</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

</head>
<body>
	<img src="./img/logotecnm.png">
	<div class="container">

	<!-- Hipervinculo para poder entrar a loguearse y crear una sesion -->
			<div class="row">
				<div class="col-md-12 login" > 
					<a href="src/login.html">INICIAR SESION</a>
				</div>
			</div>

			<div class="row">
		<?php
			include("db/db.php");
			$con=mysqli_connect($servidor,$usuario,$password,$bd);
			$sql="select *from proyectos";
			$execute=mysqli_query($con,$sql);
			while($fila=mysqli_fetch_assoc($execute)){
				?>
					<div class="col-md-4 tarjeta-proyecto">
						<img src="img/<?php echo $fila['id_empresa']?>.png" align="right" width="70px" height="50px">
						<p><strong>Titulo: </strong><?php echo $fila['nombre']?></p>
						<p><strong>Objetivo: </strong><?php echo substr($fila['objetivo_general'],0,100)."....." ?></p>
						<p><strong>Descripcion: </strong><?php echo substr( $fila['descripcion'],0,100)."....."?></p>
						<form action="accionesdb" method="POST">
							<input type="hidden" name="id_proyecto" value="<?php echo $fila['id_proyecto'] ?>" >
							<input type="submit" name="ver_proyecto_invitado" value="VER MAS" class="btn_ver">
						</form>
					</div>
				<?php
			}
		?>
			</div>
	</div>
</body>
</html>