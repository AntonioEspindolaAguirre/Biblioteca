<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<title>Recuperrar Contraseña</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-3"> </div>
				<div class="col-md-6">
					
					<br> <h1 align="center">¿Olvidastes tu contraseña?</h1>
					<br>
					<h3 align="center">Escribe tu email registrado</h3>

					<form action="metodosUsuario.php" name="recuperar" method="post">
						<input type="hidden" name="opcion" value="1">
						<div class="form-group">
							<label for="correo">Email</label>
							<input type="email" name="form-control" id="correo" name="correo" required>
						</div>

						<center>
							<input type="submit" class="btn btn-primary" name="recuperar" value="Enviar"> 
							<button class="btn btn-danger" onclick="location.href='index.php'">Cancelar</button>
						</center>

					</form>
				</div>			
		</div>
	</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>