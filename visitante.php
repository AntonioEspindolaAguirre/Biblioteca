<?php
session_start();
include('inc/conexion.php');
include('inc/rol.php');


if(acceso($_SESSION['tipoUsuario'],'visitante')){
    $correo=$_SESSION['correo'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Usuario</title>
</head>
<body>
    <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6">
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
                                <a class="nav-link" href="cierreSesion.php">Cerrar Sesion<span class="sr-only">(current)</span></a>
                                </li>
                                
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <br> <br>
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10 lead text-center">
                <center>LISTADO DE PRESTAMOS</center>
                <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Clave</th>
                                <th scope="col">Titulo</th>
                                <th scope="col">Fecha de Prestamo</th>
                                <th scope="col">Fecha de Devolución</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    include('inc/mensaje.php');
                                    $i=0;
                                    $query="SELECT p.idPrestamo,l.titulo, p.fechaPrestamo, p.fechaDevolucion
                                    FROM prestamo as p
                                    INNER JOIN usuario AS u on p.usuario_idUsuario = u.idUsuario
                                    INNER JOIN libro as l on p.libro_claveLibro = l.claveLibro
                                    WHERE u.login_email = '$correo';";
                                    $consulta=$conexion->query($query);
                                    while($fila=mysqli_fetch_array($consulta)){
                                        $i++;
                                        echo "<tr><td>".$i."</td>";
                                        echo "<td>".$fila['0']."</td>";
                                        echo "<td>".$fila['1']."</td>";
                                        echo "<td>".$fila['2']."</td>";
                                        if($fila['3']==''){
                                            echo "<td>Aun sin devolver</td></tr>";
                                        }
                                        else{
                                            echo "<td>".$fila['3']."</td></tr>";
                                        }
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
elseif($_SESSION['tipoUsuario']=='Administrador'){
    header('location:admin.php');
    //header('location:index.php');
}
elseif($_SESSION['tipoUsuario']=='Bibliotecario'){
    header('location:bibliotecario.php');
}
else{
    header('location:index.php');
}
?>