<?php
session_start();
include('inc/conexion.php');
include('inc/rol.php');
if(acceso($_SESSION['tipoUsuario'],'verLibros')){
?>
<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <title>Información de los libros</title>
    </head>
    <body>
    <div class="row">
        <div class="col-md-6"></div>
        <div class="col-md-6">
            <nav class="navbar navbar-expand-md navbar navbar-light" style="background-color: #e3f2fd;"> 
                <a class="navbar-brand" href="admin.php" >
                    <img src="img/user.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
                        Administrador
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>        
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto mr-5">
                        <li class="nav-item">
                            <a class="nav-link" href="informacionUsuario.php">Usuarios <span class="sr-only">(current)</span></a>
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
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <h1 align="center">Información de los libros</h1>
                    <br>
                    
                    <p align="right">
                        <button class="btn btn-primary" onclick="location.href='agregarLibro.php'">Agregar libro</button>
                    </p>
                    
                    <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">No. </th>
                                <th scope="col">Clave</th>
                                <th scope="col">Titulo</th>
                                <th scope="col">Ver</th>
                                <th scope="col">Actualizar</th>
                                <th scope="col">Eliminar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $i=0;

                                    $query="SELECT l.claveLibro, l.titulo
                                    FROM libro as l";
                                    $consulta=$conexion->query($query);
                                    while($fila=mysqli_fetch_array($consulta)){
                                        $i++;
                                        echo "<tr><td>".$i."</td>";
                                        echo "<td>".$fila['0']."</td>";
                                        echo "<td>".$fila['1']."</td>";
                                        echo "<td align='center'><a href='infoLibro.php?idLibro=".$fila['0']."'><i class='material-icons'>visibility</i></a></td>";
                                        echo "<td align='center'><a href='actualizarLibro.php?clave=".$fila['0']."'><i class='material-icons'>edit</i></a></td>";
                                        echo "<td align='center'><a href='metodosUsuario.php?idLibro=".$fila['0']."&opcion=11'><i class='material-icons' style='color:red'>delete</i></a></td></tr>";
                                        
                                    }
                                ?>
                            </tbody>
                    </table>

                </div>
                <div class="col-md-2"></div>
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