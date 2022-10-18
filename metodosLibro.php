<?php
  include('inc/mensaje.php');
  include('inc/conexion.php');

  $opcion=$_REQUEST['opcion'];

  echo $opcion;

  switch ($opcion) {
  	case "1":
  	      $correo=$_REQUEST['correo'];
  		    $sql="SELECT * FROM `login`, usuario WHERE login.email='$correo' and usuario.habilitado='Si'";

  		    $consulta=$conexion->query($sql);
  		    if ($fila=mysqli_fetch_array($consulta)) {
  			 correo($fila[0], $fila[1]);
  		}
  	else{
  		mensaje("Correo no registrado", "index.php", "error.jpg");
  	}
  	break;

    case "2":
             $clave=$_REQUEST['clave'];
             $nomL=$_REQUEST['nomL'];
             $nom=$_REQUEST['nom'];
             $apaterno=$_REQUEST['apaterno'];
             $amaterno=$_REQUEST['amaterno'];
             $clas=$_REQUEST['clas'];
             $edi=$_REQUEST['edi'];

            $sql="call agregarLibro('$clave','$clas','$nomL', '$nom', '$apaterno', '$amaterno','$edi')";

             $consulta=$conexion->query($sql);
              if($consulta>0){
                mensaje("Registro dado de alta ", "informacionLibro.php", "ok.jpg");
            }
              else{
                mensaje("Error", "informacionLibro .php", "error.jpg");
            }

            break;

    case "3":
             $clave=$_REQUEST['clave'];
             $nomL=$_REQUEST['nomL'];
             $nom=$_REQUEST['nom'];
             $apaterno=$_REQUEST['apaterno'];
             $amaterno=$_REQUEST['amaterno'];
             $clas=$_REQUEST['clas'];
             $edi=$_REQUEST['edi'];

        $sql="call actualizarLibro('$clave','$clas','$nomL', '$nom', '$apaterno', '$amaterno','$edi')";
          $consulta=$conexion->query($sql);
              if($consulta>0){
                mensaje("Registro modificado ", "informacionLibro.php", "ok.jpg");
            }
              else{
                mensaje("Error", "informacionLibro.php", "error.png");
              }

             break ; 

      case"4":
             $clave=$_REQUEST['clave'];
             $nomL=$_REQUEST['nomL'];
             $nom=$_REQUEST['nom'];
             $apaterno=$_REQUEST['apaterno'];
             $amaterno=$_REQUEST['amaterno'];
             $clas=$_REQUEST['clas'];
             $edi=$_REQUEST['edi'];

          $sql="call eliminarLibro('$clave','$clas','$nomL', '$nom', '$apaterno', '$amaterno','$edi')";
           $consulta=$conexion->query($sql);   
           if($consulta>0){
              mensaje("Libro eliminado", "informacionLibro.php","ok.jpg");
           }else{
              mensaje("Error, no se puede eliminar", "informacionLibro.php", "error.jpg");
              }

             break ;
  }// fin del switch
    function generar (){
    	$cadena_base = 'ABCDEFGHIJKLMNÑOPQRSTUVWXYZabcdefghijklmnñopqrstuvwxyz';
    	$cadena_base .= '0123456789' ;
    	$password ='';
    	$limite = strlen($cadena_base) - 1;
    	for ($i=0; $i <10; $i++)
    	$password .= $cadena_base[rand(0, $limite)];
    	return $password;	
    }

  ?>