<?php
session_start();
include('inc/privilegio.php');
if (permitirAcceso($_SESSION['tipoUsuario'], 'informacionUsuario')){
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Informacion Libro </title>
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
               <li class="nav-item active"><a class="nav-link" href="/Biblioteca/prestamo.php">Menú</a></li>
               <li class="nav-item active"><a class="nav-link" href="/Biblioteca/prestamo.php">Prestamo</a></li>
               <li class="nav-item active"><a class="nav-link" href="/Biblioteca/cierreSesion.php">Cerrar Sesión</a></li>
            </ul>
        </div>
    </nav>
</header>

<div class="container">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
        <br>
        <br>
		<h1 align="center">Información de Libro </h1>
		<br>
		<p align="right">                             
         <button class="btn btn-primary" onclick="location.href='agregarLibro.php'">Agregar Libro </button> </p>

		   <table class="table" >

		   	<thead>
		   		<tr>
                    <th scope="col">No. </th>
		   			<th scope="col">Clave </th>
		   			<th scope="col">Titulo </th>
                    <th scope="col">Ver</th>
		   		</tr>
		   	</thead>
          <tbody>

		<?php 
		include('inc/mensaje.php');
		include('inc/conexion.php');
		$cuenta=0;
         
          $sql= "SELECT `clave`, `Clasificacion`, `Titulo`, `NomAutor`, `ApellidoPaternoAutor`, `ApellidoMaternoAutor`, `editorial_idEditorial` FROM `libro`";

         $consulta=$conexion->query($sql); 
        
         while($fila=mysqli_fetch_array($consulta)){
         	 $cuenta++;
      echo "<tr><td>" .$cuenta. "</td>";
      echo "<td>" .$fila[0]. "</td>";
      echo "<td>" .$fila[2]. "</td>";
     	echo "<td align='center'><a href='verLibro.php?clave=".$fila[0]."'> <i class='fa fa-address-book-o' style='font-size:24px'></i></a></td>";  
         }

      ?> 

   </tbody>
</table>  

</div>
</div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>

<?php
}
else
header('Location:informacionUsuario.php');
?>