
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Bibliotecarios</title>
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
               <li><span class="nav-link active">Bienvenido</span></li>
               <li class="nav-item active"><a class="nav-link" href="/Biblioteca/cierreSesion.php">Cerrar Sesión</a></li>
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
		<h1 align="center">Blibiotecario </h1>
        <br>
        <br>
        <table class="table" >
        <thead>
        <tr>
        <th scope="col" class="nav-item active"><a class="nav-link" href="/Biblioteca/libro.php">Libro </a></th>
        <th scope="col" class="nav-item active"><a class="nav-link" href="/Biblioteca/Editoriall.php">Editorial </a></th>
        <th scope="col" class="nav-item active"><a class="nav-link" href="/Biblioteca/ifprestamo.php">Prestamo </a></th>
                </tr>
            </thead>
        </table>
</div>
</div>
</div>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>

