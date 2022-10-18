  <!DOCTYPE html>
  <html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
  </head>
    <title>Respuestas</title>
  </head>
  <body>    
    <div class="row">
      <div class="col-md-4 "></div>
      <div class="col-md-8">
        <nav class="navbar navbar-expand-md  navbar navbar-light lead" style="background-color: #e3f2fd;"> 
          <a class="navbar-brand ">
              <img src="img/biblio.png" width="30" height="30" class="d-inline-block align-top" alt="">
                Buscar por titulo
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>            
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mr-5">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Inicio<span class="sr-only">(current)</span></a>
              </li>
            </ul>
            <form class="form-inline my-2 my-lg-0" method="POST" >
              <input class="form-control mr-sm-2" type="search" placeholder="Titulo del libro" name="nomLi" aria-label="Buscar" required>
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit" >Buscar</button>
            </form>
          </div>
        </nav>
      </div>
    </div>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
        <?php
        include('inc/conexion.php');
        include('inc/mensaje.php');
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
                $nomL=$_REQUEST['nomLi'];
                $query="select l.claveLibro, l.titulo, l.nomAutor, l.apAutor, l.amAutor, l.clasificacion, e.nomEditorial 
                from libro as l
                inner join editorial as e on l.editorial_idEditorial = e.idEditorial 
                WHERE l.titulo = '$nomL'";
                $libro=$conexion->query($query);
                $nulo=$conexion->query($query);
                if($fila=mysqli_fetch_array($nulo)){
                    $validar =mysqli_fetch_array($libro);
                    echo"<table class='table lead '>";
                    echo"<thead>";
                    echo"<tr class='table-warning'>";
                    echo"<th scope='col'>Clave libro</th>";
                    echo"<th scope='col'>Titulo</th>";
                    echo"<th scope='col'>Nombre Autor</th>";
                    echo"<th scope='col'>Editorial</th>";
                    echo"</tr>";
                    echo"</thead>";
                    echo "<tr class='table-info'><td>".$validar['0']."</td>";
                    echo "<td>".$validar['1']."</td>";
                    echo "<td>".$validar['2']." ",$validar['3']." ",$validar['4']."</td>";
                    echo "<td>".$validar['6']."</td></tr>";
                }
                else{
                        mensage('El libro no existe','buscarTitulo.php','error.png');
                      
                }
                

        }
        ?>
        </div>
        <div class="col-md-2"></div>
    </div>
      <br><br> <br>
      
    

      

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" ></script>
    <script src="js/bootstrap.bundle.min.js"></script>    
  </body>
  </html>