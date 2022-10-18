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
             $apaterno=$_REQUEST['apaterno'];
             $amaterno=$_REQUEST['amaterno'];
             $fecha=$_REQUEST['fechar'];
             $tel=$_REQUEST['tel'];
             $correo=$_REQUEST['correo'];
             $tipo=$_REQUEST['tipo'];

             $clave=generar();
             
       $sql="call agregarUsuario('$correo','$clave','$tipo', '$nom', '$apaterno', '$amaterno','fecha','$tel','Si', @res)";

             $consulta=$conexion->query($sql);
              if($consulta>0){
                mensaje("Registro dado de alta ", "informacionUsuario.php", "ok.jpg");
            }
              else{
              	mensaje("Error", "informacionUsuario.php", "error.jpg");
              }

             break ; 

    case "3":

            $nom=$_REQUEST['nom'];
            $apaterno=$_REQUEST['apaterno'];
            $amaterno=$_REQUEST['amaterno'];
            $tel=$_REQUEST['tel'];
            $tipo=$_REQUEST['tipo'];
            $correo=$_REQUEST['correo'];

        $sql="call actualizarUsuario('$correo','$tipo', '$nom', '$apaterno', '$amaterno','$tel', @res)";

          $consulta=$conexion->query($sql);
              if($consulta>0){
                mensaje("Registro modificado ", "informacionUsuario.php", "ok.jpg");
            }
              else{
              	mensaje("Error", "informacionUsuario.php", "error.png");
              }

             break ; 

      case"4":
          $correo=$_REQUEST['correo'];
          $sql="call InhabilitarUsuario ('$correo', @res)";   
          $consulta=$conexion->query($sql);
           if($consulta>0){
              header('Location:informacionUsuario.php');
            }    
             
          break;   

      case"5":
          $correo=$_REQUEST['correo'];
          $sql="call habilitarUsuario('$correo',@res)";
           $consulta=$conexion->query($sql);   
           if($consulta>0){
              header('Location:informacionUsuario.php');
            }    
             
          break; 

      case"6":
          $correo=$_REQUEST['correo'];
          $sql="call eliminarUsuario('$correo',@res)";
           $consulta=$conexion->query($sql);   
           if($consulta>0){
              mensaje("Usuario eliminado", "informacionUsuario.php","ok.jpg");
           }
          else{
              mensaje("Error, no se puede eliminar", "informacionUsuario.php", "error.jpg");
              }

             break ;
  }// fin del switch

  function correo($correo, $clave){
  	$msg="Usuario:".$correo ."\n Contraseña:" . $clave;
  	mail($correo, "Biblioteca Municipal", $msg);
  	mensaje("Contraseña enviada", "login.php", "ok.jpg");
  }
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