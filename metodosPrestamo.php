 <?php
include('inc/mensaje.php');
include('inc/conexion.php');

$opcion = $_REQUEST['opcion'];

echo $opcion;

switch ($opcion) {
    case "2":
        $clave = $_REQUEST['clave'];
        $email = $_REQUEST['email'];
        $fechaPres = $_REQUEST['fechaPres'];
        $fechaDevo = $_REQUEST['fechaDevo'];

        $sql = "call agregarPrestamo('$fechaPres','$fechaDevo','$clave', '$email')";

        $consulta = $conexion->query($sql);
        if ($consulta > 0) {
            mensaje("Registro dado de alta ", "informacionPrestamo.php", "ok.jpg");
        } else {
            mensaje("Error", "informacionPrestamo.php", "error.jpg");
        }

        break;

    case "3":
        $clave = $_REQUEST['clave'];
        $email = $_REQUEST['email'];
        $sql = "call devolverPrestamo ('$clave','$email')";
        $consulta = $conexion->query($sql);
        if ($consulta > 0) {
            mensaje("Registro dado de alta ", "informacionPrestamo.php", "ok.jpg");
        } else {
            mensaje("Error", "informacionPrestamo.php", "error.jpg");
        }
        break;
}// fin del switch
function generar()
{
    $cadena_base = 'ABCDEFGHIJKLMNÑOPQRSTUVWXYZabcdefghijklmnñopqrstuvwxyz';
    $cadena_base .= '0123456789';
    $password = '';
    $limite = strlen($cadena_base) - 1;
    for ($i = 0; $i < 10; $i++)
        $password .= $cadena_base[rand(0, $limite)];
    return $password;
}

?>