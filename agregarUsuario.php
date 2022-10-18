<!DOCTYPE html>
	<html lang="en">
	<head>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" href="css/bootstrap.min.css">
			<title>Agregar Usuario</title>
		<style>
				{	
            min-height: 100%;
            position: relative;
        }

        body {
            margin: 0 0 60px;
        }

        footer {
            background-color: var(--danger);
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 40px;
            color: white;
        }
  </style>
</head>
<body class="d-flex flex-column min-vh-100">
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger w-100">
        <a class="navbar-brand"
           href="/index.php">Bliblioteca</a>
        <button class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse"
             id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                    <li><span class="nav-link active">Bienvenido</span>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link"
                           href="/Biblioteca/cierreSesion.php">Cerrar Sesión</a>
                    </li>
                            </ul>

        </div>
    </nav>
</header>

			<div class="container">
				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-6">
					<h1 align="center">Agregar Usuario</h1>
					<br>
					<form action="metodosUsuario.php" name="agregar" method="post">
						<input type="hidden" name="opcion" value="2">

						<div class="form-group">
							<label for="nombre">Nombre</label>
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
							<label for="fechar">Fecha de Registro</label>
							<input type="date" class="form-control" id="fechar" name="fechar"> 
						</div>

							<div class="form-group">
								<label for="tel">telefono</label>
								<input type="text" class="form-control" id="tel" name="tel" maxlength="10" pattern="[0-9]+"> 
							</div>


							<div class="form-group">
								<label for="correo">Email</label>
								<input type="email" class="form-control" id="correo" name="correo" required> 
							</div>

							<div class="form-group">
								<label for="tipo">Tipo de usuario </label>
								<select class="form-control" id="tipo" name="tipo">
									<option value="Administrador">Administrador</option>
									<option value="Bibliotecario">Bibliotecario</option>
									<option value="Usuario">Usuario</option>
								</select>
							</div>

			                  <p align="center">
			                  	<input type="submit" class="btn btn-primary" name="enviar" value="Agregar Usuario">
			                  	<button class="btn btn-danger" onclick="location.href='informacionUsuario.php'">Cerrar</button>
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