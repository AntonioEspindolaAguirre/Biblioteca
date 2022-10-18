<?php
session_start();
include('inc/privilegio.php');
if (permitirAcceso($_SESSION['tipoUsuario'], 'bibliotecario')){
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

            <div class="container">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                    <h1 align="center">Agregar Prestamo</h1>
                    <br>
                    <form action="metodosPrestamo.php" name="agregar" method="post">
                        
                        <input type="hidden" name="opcion" value="2">
                            <div class="form-group">
                            <label for="nombre">Clave de libro</label>
                            <input type="text" class="form-control" id="clave" name="clave" required maxlength="10"> 
                        </div>
                        
                        <div class="form-group">
                                <label for="email">Correo</label>
                                <input type="email" class="form-control" id="email" name="email" required pattern="[A-Za-zñÑáéíóúÁÉÍÒÚ" ]+> 
                        </div>

                        <div class="form-group">
                                <label for="date">Fecha de préstamo</label>
                                <input type="date" class="form-control" id="fechaPres" name="fechaPres"> 
                        </div>

                        <div class="form-group">
                                <label for="date">Fecha de devolución</label>
                                <input type="date" class="form-control" id="fechaDevo" name="fechaDevo"> 
                        </div>

                        <p align="center">
                            <input type="submit" class="btn btn-primary" name="enviar" value="Prestamo">
                            <button class="btn btn-danger" onclick="location.href='informacionPrestamo.php'">Cerrar</button>
                              </p>
                        </form>
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
header('Location:bibliotecario.php');
?>