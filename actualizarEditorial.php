<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<title>Actualizar Editorial</title>
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

<?php
include('inc/mensaje.php');
include('inc/conexion.php');
$correo=$_REQUEST['correo'];

$sql="SELECT * FROM `editorial` WHERE 1";

        $consulta=$conexion->query($sql);              
        if($fila =mysqli_fetch_array($consulta)){
?>  		
		<br>
        <br>
			<h1 align="center">   Actualizar Editorial </h1>
			<br>
			<br>
			<form action="metodosEditorial.php" name="agregar" method="post">
				<input type="hidden" name="opcion" value="3">
				<input type="hidden" name="correo" value="<?php echo $fila[2]?>">
				
				<div class="form-group">
					<label for="nombre">Nombre de la editorial</label>
					<input type="text" class="form-control" id="nom" name="nom" required value="<?php echo $fila[3] ?>"> 
				</div>

				<div class="form-group">
					<label for="correo">Correo de editorial </label>
					<input type="email" class="form-control" id="correo" name="correo" required value="<?php echo $fila[2] ?>" > 
				</div>

				<div class="form-group">
					<label for="tel">Telefono</label>
					<input type="text" class="form-control" id="tel" name="tel" maxlength="10" pattern="[0-9]+" value="<?php echo $fila[1] ?>"> 
				</div>

                  <p align="center">
                  	<input type="submit" class="btn btn-primary" name="enviar" value="Actualizar Usuario">
                  	<button class="btn btn-danger" onclick="location.href='informacionEditorial.php'">cerrar </button>
                  </p>
			</form>
          </div>
 <?php
 } // cierre de if 
 ?>        
		</div>
	</div>
	
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>	

</body>
</html>