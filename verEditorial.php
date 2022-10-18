<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Informacion Editorial </title>
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
 		<div class="col-md-2"></div>
 		 <div class="col-md-8">
          <br>
          <br>
         <h1 align="center"> Informacion Editorial  </h1> 
         <br>

         <?php 
            include('inc/mensaje.php');
            include('inc/conexion.php');
            $correo=$_REQUEST['correo'];
            
            $sql="SELECT * FROM `editorial` WHERE 1";

            $consulta=$conexion->query($sql);              
                if($fila =mysqli_fetch_array($consulta)){
                  echo"<h3> Nombre de la editorial:".$fila[3]. "</h3>";
                  echo"<h3> Correo:".$fila[2]. "</h3>";
                  echo"<h3> Telefono:".$fila[1]. "</h3>";
                  }
               ?>

             	<p align="center">
             	<button class="btn btn-danger" onclick="location.href='informacionEditorial.php'">cerrar</button>
            </p>
 		</div>
 	</div>
 </div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>
