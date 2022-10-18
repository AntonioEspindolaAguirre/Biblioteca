<?php
session_start();
include('inc/conexion.php');
include('inc/rol.php');
include('inc/mensaje.php');
if(acceso($_SESSION['tipoUsuario'],'devolver')){
?>
<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body>
        
    <?php

  
    $idPres=$_REQUEST['idPres'];
    $sql="SELECT p.idPrestamo
    FROM prestamo AS p
    WHERE p.idPrestamo=$idPres;";
    $consulta=$conexion->query($sql);
    $fila=mysqli_fetch_array($consulta);
    if(is_null($fila)){
            mensage("Prestamo No Encontrado","prestamo.php","error.png");
    } 
    else
    {      
    ?>
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <h1 align='center'>Devolver </h1>  
                    <br>
                    <br>    
                    <?php
                        $idPres=$_REQUEST['idPres'];
                        $query="call verPrestamo('$idPres',@res);;";
                        $consulta=$conexion->query($query);
                        $matriz=mysqli_fetch_array($consulta);
                        $fechaD=date('Y-m-d');
                        echo"<center>";
                        echo"<h3>Clave Prestamo : ".$idPres." </h3><br>";
                        echo"<h3>Correo : ".$matriz['1']." </h3><br>";
                        echo"<h3>Clave Libro: ".$matriz['2']." </h3><br>";
                        echo"<h3>Titulo del Libro: ".$matriz['3']." </h3><br>";
                        echo"<h3>Fecha prestamo: ".$matriz['4']." </h3><br>";
                        if(is_null($matriz['5'])){
                            if($_SESSION['tipoUsuario']=="Administrador"){
                                echo"<h3>Fecha De Devolución: ".$fechaD."</h3><br>";
                                echo "<div align=center class=\"alert alert-danger w-50 p-3\" role=\"alert\">
                                ¡Aun sin devolver!
                            </div>
                            </center>
                            <p align=\"center\"><button class=\"btn btn-danger\" onclick=\"location.href='prestamo.php'\">Cancelar</button>
                            <button class=\"btn btn-primary\" onclick=\"location.href='metodosUsuario.php?idP=$idPres&opcion=15&fechaDev=$fechaD'\">Devolver</button></p>
                            ";
                            }
                            else{
                                echo"<h3>Fecha De Devolución: ".$fechaD."</h3><br>";
                                echo "<div align=center class=\"alert alert-danger w-50 p-3\" role=\"alert\">
                                ¡Aun sin devolver!
                            </div>
                            </center>
                            <p align=\"center\"><button class=\"btn btn-danger\" onclick=\"location.href='prestamoB.php'\">Cancelar</button>
                            <button class=\"btn btn-primary\" onclick=\"location.href='metodosUsuario.php?idP=$idPres&opcion=15&fechaDev=$fechaD'\">Devolver</button></p>
                            ";
                            }
                        }
                        else{
                            if($_SESSION['tipoUsuario']=="Administrador"){
                                echo"<h3>Fecha que lo Devolvio: ".$matriz['5']." </h3><br>";
                                echo "<br>
                                <p align=\"center\"><button class=\"btn btn-danger\" onclick=\"location.href='prestamo.php'\">Cerrar</button>
                                </p>";
                            }
                            else{
                                echo"<h3>Fecha que lo Devolvio: ".$matriz['5']." </h3><br>";
                                echo "<br>
                                <p align=\"center\"><button class=\"btn btn-danger\" onclick=\"location.href='prestamoB.php'\">Cerrar</button>
                                </p>";
                            }
                        }    
                        echo"</center>";    
                    ?>  
                    
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
    
}
elseif($_SESSION['tipoUsuario']=='Usuario'){
    header('location:visitante.php');
}
else{
    header('location:index.php');
}
?>