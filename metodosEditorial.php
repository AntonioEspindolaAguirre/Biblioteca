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
             $nom=$_REQUEST['nom'];
             $correo=$_REQUEST['correo'];
             $tel=$_REQUEST['tel'];
             $id=generar();

            $sql="call agregarEditorial('$id','$tel','$correo','$nom')";

             $consulta=$conexion->query($sql);
              if($consulta>0){
                mensaje("Registro dado de alta ", "informacionEditorial.php", "ok.jpg");
            }
              else{
                mensaje("Error", "informacionEditorial.php", "error.jpg");
            }

            break;

    case "3":
             $nom=$_REQUEST['nom'];
             $correo=$_REQUEST['correo'];
             $tel=$_REQUEST['tel'];
             $id=generar();

        $sql="call actualizarEditorial('$tel','$correo','$nom','$id')";
          $consulta=$conexion->query($sql);
              if($consulta>0){
                mensaje("Registro modificado ", "informacionEditorial.php", "ok.jpg");
            }
              else{
                mensaje("Error", "informacionEditorial.php", "error.png");
              }

             break ; 

      case"4":
             $nom=$_REQUEST['nom'];
             $correo=$_REQUEST['correo'];
             $tel=$_REQUEST['tel'];
             $id=generar();
             
          $sql="call eliminarEditorial('$tel','$correo','$nom','$id')";
           $consulta=$conexion->query($sql);   
           if($consulta>0){
              mensaje("Editorial eliminado", "informacionEditorial.php","ok.jpg");
           }
          else{
              mensaje("Error, no se puede eliminar", "informacionEditorial.php", "error.jpg");
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