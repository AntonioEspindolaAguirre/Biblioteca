<!DOCTYPE html>
    <html lang="en">
    <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="css/bootstrap.min.css">
            <title>Devolucion</title>
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
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                    <h1 align="center">Devolución</h1>
                    <br>
                    <form action="metodosPrestamo.php" name="agregar" method="post">
                        <input type="hidden" name="opcion" value="3">

                        <div class="form-group">
                            <label for="nombre">Clave de libro</label>
                            <input type="text" class="form-control" id="clave" name="clave" required maxlength="10"> 
                        </div>
                        
                        <div class="form-group">
                                <label for="email">Correo</label>
                                <input type="email" class="form-control" id="email" name="email" required pattern="[A-Za-zñÑáéíóúÁÉÍÒÚ" ]+> 
                        </div>

                        <p align="center">
                            <input type="submit" class="btn btn-primary" name="enviar" value="Devolucion">
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