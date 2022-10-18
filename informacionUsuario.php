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
	<title>Informacion Usuario </title>
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
               <li class="nav-item active"><a class="nav-link" href="/Biblioteca/administrador.php">Menú</a></li>
               <li class="nav-item active"><a class="nav-link" href="/Biblioteca/informacionUsuario.php">Usuario</a></li>
               <li class="nav-item active"><a class="nav-link" href="/Biblioteca/informacionLibro.php">Libro</a></li>
               <li class="nav-item active"><a class="nav-link" href="/Biblioteca/informacionEditorial.php">Editorial</a></li>
               <li class="nav-item active"><a class="nav-link" href="/Biblioteca/informacionPrestamo.php">Prestamo</a></li>
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
		<h1 align="center">Información de Usuario </h1>
		<br>
		<p align="right">                             
         <button class="btn btn-primary" onclick="location.href='agregarUsuario.php'">Agregar Usuario </button> </p>

		   <table class="table" >

		   	<thead>
		   		<tr>
		   			<th scope="col">No. </th>
		   			<th scope="col">Nombre </th>
		   			<th scope="col">Ap. paterno </th>
		   			<th scope="col">Ap. materno</th>
		   			<th scope="col">Ver </th>
		   			<th scope="col">Actualizar </th>
		   			<th scope="col">Inhabilitar</th>
		   			<th scope="col">Eliminar</th>
		   		</tr>
		   	</thead>
          <tbody>

		<?php 
		include('inc/mensaje.php');
		include('inc/conexion.php');
		$cuenta=0;
         
          $sql= "SELECT * FROM `usuario`, login WHERE login.email=usuario.login_email";

         $consulta=$conexion->query($sql); 
        
         while($fila=mysqli_fetch_array($consulta)){
         	 $cuenta++;
      echo "<tr><td>" .$cuenta. "</td>";
      echo "<td>" .$fila[1]. "</td>";
      echo "<td>" .$fila[2]. "</td>";
      echo "<td>" .$fila[3]. "</td>";
     	echo "<td align='center'><a href='verUsuario.php?correo=".$fila[7]."'> <i class='fa fa-address-book-o' style='font-size:24px'></i></a></td>";  
     	echo "<td align='center'><a href='actualizarUsuario.php?correo=".$fila[7]."'> <i class='fa fa-pencil' style='font-size:24px'></a></i></td>"; 
     	if ($fila[6]=='Si') {
     	echo "<td align='center'><a href='metodosUsuario.php?correo=".$fila[7]." &opcion=4'><i class='fa fa-check-square-o' style='font-size:24px'> </i></td></a>";
     } else{
     	echo "<td align='center'><a href='metodosUsuario.php?correo=".$fila[7]." &opcion=5'><i class='fa fa-close' style='font-size:24px; color:red'> </i></td></a>";
 			   }

 		echo "<td><a href='metodosUsuario.php?correo=".$fila[7]." &opcion=6'><i class='fa fa-trash-o'style='font-size:24px; color:red'></i></a></td></tr>";
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