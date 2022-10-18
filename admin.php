<?php
session_start();
include('inc/conexion.php');
include('inc/rol.php');
if(acceso($_SESSION['tipoUsuario'],'admin')){
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <title>Administrador</title>
    </head>
    <body>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-8">
                <nav class="navbar navbar-expand-md navbar navbar-light" style="background-color: #e3f2fd;"> 
                    <a class="navbar-brand">
                        <img src="img/user.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
                        Bienvenido(a): <?php echo $_SESSION['nombre'];?>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto mr-5">
                            <li class="nav-item active">
                            <a class="nav-link" href="informacionUsuario.php">Usuarios <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="verLibros.php">Libro</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="informacionEditorial.php" tabindex="-1" aria-disabled="true">Editorial</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="prestamo.php">Prestamo</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="cierreSesion.php">Cerrar Sesión</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4"></div>
                    <div  class="col-md-4">
                        
                            <h1 align="center" class="text-uppercase text-monospace " style="margin-top: 50%">Administrador</h1>
                    </div>
                    <div class="col-md-4"></div>
                </div>
        </div>
        




        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="js/bootstrap.min.js" ></script>
    </body>
</html>
<?php
}
elseif($_SESSION['tipoUsuario']=='Bibliotecario'){
    header('location:bibliotecario.php');
    //header('location:index.php');
}
elseif($_SESSION['tipoUsuario']=='Usuario'){
    header('location:visitante.php');
}
else{
    header('location:index.php');
}
?>