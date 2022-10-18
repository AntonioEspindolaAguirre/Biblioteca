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
	<title>Prestamo</title>
</head>
<body>
<link rel="apple-touch-icon" sizes="180x180" href="/assets/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/favicon-16x16.png">
    <link rel="manifest" href="/assets/site.webmanifest">
    <!--    <link rel="stylesheet"-->
    <!--          href="../assets/css/index.css">-->
    <title>Bliblioteca</title>
    <style>
        html {
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
        <h1 align="center">Listado de Préstamo</h1>
        <br>
        <p align="align">                             
        <button class="btn btn-primary" onclick="location.href='emprestar1.php'">Prestamo </button> 
</p>
           <table class="table" >

            <thead>
                <tr>
                    <th scope="col">No. </th>
                    <th scope="col">Clave </th>
                    <th scope="col">Fecha de devolución</th>
                     <th scope="col">Fecha de prestamo </th>
                </tr>
            </thead>
          <tbody>

        <?php 
        include('inc/mensaje.php');
        include('inc/conexion.php');
        $cuenta=0;
         
        $sql= "SELECT * FROM `prestamo` WHERE `libro_clave`";

         $consulta=$conexion->query($sql); 
        
         while($fila=mysqli_fetch_array($consulta)){
             $cuenta++;

      echo "<tr><td>" .$cuenta. "</td>";
      echo "<td>" .$fila[3]. "</td>";
      echo "<td>" .$fila[1]. "</td>";
      echo "<td>" .$fila[2]. "</td>";
        }
      ?> 
   </tbody>
</table>  
<p align="center">                             
         <button class="btn btn-primary" onclick="location.href='devolucion.php'">Devolucion </button> 
</p>
<th scope="col" class="nav-item active"><a class="nav-link" href="/Biblioteca/informacionPrestamoIndividual.php">Información Individual</a></th>
</div>
</div>
</div>

<?php
}
else
header('Location:informacionUsuario.php');
?>