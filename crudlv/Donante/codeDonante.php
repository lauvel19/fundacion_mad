<!-- Instrucciones de uso  https://sweetalert.js.org/guides/#installation -->
<script src="../js/sweetalert.js"></script>

<?php
// Incluimos la conexión a la base de datos 
include("../Conexion/conexion.php");

// Recibimos las variables enviadas
$txtCc_donante = (isset($_POST['txtCc_donante'])) ? $_POST['txtCc_donante'] : "";
$txtNombre = (isset($_POST['txtNombre'])) ? $_POST['txtNombre'] : "";
$txtDireccion = (isset($_POST['txtDireccion'])) ? $_POST['txtDireccion'] : "";
$txtTelefono = (isset($_POST['txtTelefono'])) ? $_POST['txtTelefono'] : "";
$txtMonto_donacion = (isset($_POST['txtMonto_donacion'])) ? $_POST['txtMonto_donacion'] : ""; 
$accion = (isset($_POST['accion'])) ? $_POST['accion'] : "";
 
    switch ($accion) {
        case 'btnAgregar':
            $insercionDonantes = $conn->prepare(
                "INSERT INTO donantes (cc_donante, nombre, direccion, telefono, monto_donacion) VALUES ('$txtCc_donante', '$txtNombre', '$txtDireccion',
                 '$txtTelefono', '$txtMonto_donacion')");

                $insercionDonantes->execute();
                $conn->close();
                header('location: index.php');

            break;

        case 'btnModificar':
            $editarDonantes = $conn->prepare("UPDATE donantes SET nombre='$txtNombre', direccion='$txtDireccion', telefono = '$txtTelefono',
            monto_donacion='$txtMonto_donacion' where cc_donante='$txtCc_donante'");
            
            $editarDonantes->execute();
            $conn->close();

            header('location: index.php');

            break;

        case 'btnEliminar':

            $eliminarDonante = $conn->prepare("DELETE FROM donantes WHERE cc_donante ='$txtCc_donante'");
        
            $eliminarDonante->execute();
            $conn->close();
            header('location: index.php');

            break;

        case 'btnCancelar':
            header('location: index.php');
            break;

        default:
            # code...
            break;
}
     
/* Consultamos todos los donantes  */
$consultaDonantes = $conn->prepare("SELECT * FROM donantes");
$consultaDonantes->execute();
$listaDonantes = $consultaDonantes->get_result();
$conn->close();