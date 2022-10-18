<!DOCTYPE html>
	<html lang="en">
	<head>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" href="css/bootstrap.min.css">
			<title>Agregar Libro</title>
		</head>
		<body>

			<div class="container">
				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-6">
					<h1 align="center">Agregar Libro</h1>
					<br>
					<form action="metodosLibro.php" name="agregar" method="post">
						<input type="hidden" name="opcion" value="2">

						<div class="form-group">
								<label for="clave">Clave de libro</label>
								<input type="text" class="form-control" id="clave" name="clave" maxlength="10" pattern="[0-9]+"> 
							</div>


						<div class="form-group">
							<label for="nombre">Nombre del Libro</label>
							<input type="text" class="form-control" id="nomL" name="nomL" required pattern="[A-Za-zñÑáéíóúÁÉÍÒÚ ]+"> 
						</div>

						<div class="form-group">
							<label for="nombre">Nombre del Autor</label>
							<input type="text" class="form-control" id="nom" name="nom" required pattern="[A-Za-zñÑáéíóúÁÉÍÒÚ ]+"> 
						</div>

						<div class="form-group">
							<label for="paterno">Apellido paterno </label>
							<input type="text" class="form-control" id="apaterno" name="apaterno" required pattern="[A-Za-zñÑáéíóúÁÉÍÒÚ ]+"> 
						</div>

						<div class="form-group">
							<label for="materno">Apellido Materno</label>
							<input type="text" class="form-control" id="amaterno" name="amaterno" required pattern="[A-Za-zñÑáéíóúÁÉÍÒÚ ]+"> 
						</div>
							<div class="form-group">
								<label for="tipo">Clasificacion </label>
								<select class="form-control" id="clas" name="clas">
									<option value="Matematicas">Matematicas</option>
									<option value="Arte">Arte</option>
									<option value="Filosofia">Filosofia</option>
								</select>
							</div>
							<div class="form-group">
								<label for="tipo">Editorial </label>
								<select class="form-control" id="edi" name="edi">
									<option value="Administrador">Fondo de cultura</option>
									<option value="Bibliotecario">McGRaw-Hill</option>
								</select>
							</div>

			                  <p align="center">
			                  	<input type="submit" class="btn btn-primary" name="enviar" value="Agregar Libro">
			                  	<button class="btn btn-danger" onclick="location.href='informacionLibro.php'">Cerrar</button>
			                  </p>
						</form>
					</div>
				</div>
		</div>
			<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
			<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
			<script src="js/bootstrap.min.js"></script>	

			</body>
	</html>