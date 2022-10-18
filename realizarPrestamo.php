<?php
session_start();
include('inc/conexion.php');
include('inc/rol.php');
if(acceso($_SESSION['tipoUsuario'],'realizarPrestamo')){
?>
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <title>Agregar Libro</title>
    </head>
    <body>
        
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                <h1 align="center">Agregar Prestamo</h1><br>
                <form name="add" action="metodosUsuario.php" method="post">
                        <div class="form-group">
                        <input type="hidden" name="opcion" value="10">
                        <input type="hidden" name="fechaPres" value="<?php echo date('Y-m-d'); ?>">
                            <label for="claveLibro">Clave Libro</label>
                            <input type="text" class="form-control" id="claveLibro" name="claveLibro" required pattern="[a-zA-zñÑáéíóúÁÉÍÓÚ0-9 ]+" maxlength="10">
                        </div>
                        <div class="form-group">
                            <label for="claveLibro">Email Usuario</label>
                            <input type="email" class="form-control" id="correo" name="correo" required >
                            <br>
                            <label for="claveLibro">Fecha del Prestamo: <?php echo date('Y-m-d'); ?> </label>
                        </div>
                        
                        <?php
                            if($_SESSION['tipoUsuario']=="Administrador"){
                                echo"<p align=\"center\">
                                <input type=\"submit\" class=\"btn btn-primary\" name=\"agregar\" value=\"Agregar Prestamo\">
                                <button type=\"button\" class=\"btn btn-danger\" onclick=\"location.href='prestamo.php'\">Cerrar</button>
                            </p>";
                            }
                            else{
                                echo"<p align=\"center\">
                                <input type=\"submit\" class=\"btn btn-primary\" name=\"agregar\" value=\"Agregar Prestamo\">
                                <button type=\"button\" class=\"btn btn-danger\" onclick=\"location.href='prestamoB.php'\">Cerrar</button>
                            </p>";
                            }
                            
                        ?>
                        

                    </form>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" ></script>
    </body>
    </html>
<?php
}
elseif($_SESSION['tipoUsuario']=='Usuario'){
    header('location:visitante.php');
}
else{
    header('location:index.php');
}
?>