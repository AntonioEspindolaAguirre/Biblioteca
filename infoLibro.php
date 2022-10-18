<?php
session_start();
include('inc/conexion.php');
include('inc/rol.php');
if(acceso($_SESSION['tipoUsuario'],'infoLibro')){
?>
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <title>Document</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <h1 align='center'>Ver información</h1>  
                    <br>
                    <br>    
                    <?php

                        $idLibro=$_REQUEST['idLibro'];

                        $query="call verLibro('$idLibro',@res);";
                        $consulta=$conexion->query($query);
                        if($fila=mysqli_fetch_array($consulta)){
                            echo"<center>";
                            echo"<h3>Clave Libro : ".$fila['0']." </h3><br>";
                            echo"<h3>Titulo : ".$fila['1']." </h3><br>";
                            echo"<h3>Nombre del autor: ".$fila['2']." </h3><br>";
                            echo"<h3>Ap. Paterno: ".$fila['3']." </h3><br>";
                            echo"<h3>Ap. Materno: ".$fila['4']." </h3><br>";
                            echo"<h3>Clasificacion: ".$fila['5']." </h3><br>";
                            echo"<h3>Editorial: ".$fila['6']." </h3><br>";
                            echo"</center>";
                        }
                    ?>  
                    <br> <br>
                    <p align="center"><button class="btn btn-danger" onclick="location.href='verlibros.php'">Cerrar</button></p>
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