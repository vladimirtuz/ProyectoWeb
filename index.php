<!DOCTYPE html>
<html>
<head>
	<title>Anteproyectos ITC</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

</head>
<body>
	<div class="container">

   	<!-- Imagenes del encabezado -->
			<div class="row">
				<div class="col-md-4">
					<img src="./img/logos/logotecnm.png" width="50%">
				</div>

				<div class="col-md-4">
					<img src="./img//logos/logosep.png" width="50%">
				</div>

				<div class="col-md-4">
					<img src="./img/logos/logotec.png" width="50%">
				</div>

			</div>

	<!-- Hipervinculo para poder entrar a loguearse y crear una sesion -->
			<div class="row">
				<div class="col-md-12 login" > 
					
					<!-- <a href="src/login.html">INICIAR SESION</a> -->
					<input type="button" name="session" value="INICIAR SESSION" class="btn_login" onclick=location.href="./src/login.html">
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
				

					<div class="col-md-4 container-tarjeta">
						<img src="img/empresas/<?php echo $fila['id_empresa']?>.png" class="logo_empresa">
							
							<?php
								$id_empresa=$fila['id_empresa'];
								$sql2="select *from empresas where matricula=$id_empresa";
								$execute2=mysqli_query($con,$sql2);
								$empresa=mysqli_fetch_assoc($execute2);
								

							?>


							<table>
							<tr><td><h5><?php echo $empresa['nombre']; ?></h5></td><td>&nbsp</td></tr>
							<tr><td><h4></strong><?php echo $fila['nombre']?></h4></td></tr>
							<tr><td><p><strong></strong><?php echo substr( $fila['descripcion'],0,100)."....."?></p></td></tr>
							<form action="./src/detalles-proyecto.php" method="POST">
							<input type="hidden" name="id_proyecto" value="<?php echo $fila['id_proyecto'] ?>" >
							<tr><td><input type="submit" name="ver_proyecto_invitado" value="VER MAS" class="btn_ver" onclick="ver_proyecto()"></td></tr>
							</form>
							</table>

						
					</div>
			
				<?php
			}
		?>
			</div>
	</div>

</body>
</html>