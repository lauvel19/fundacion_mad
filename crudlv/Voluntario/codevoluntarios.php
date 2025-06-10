<!-- Instrucciones de uso  https://sweetalert.js.org/guides/#installation -->
<script src="../js/sweetalert.js"></script>

<?php
// Incluimos la conexión a la base de datos 
include("../Conexion/conexion.php");

// Recibimos las variables enviadas
$txtCc_voluntario = (isset($_POST['txtCc_voluntario'])) ? $_POST['txtCc_voluntario'] : "";
$txtNombre = (isset($_POST['txtNombre'])) ? $_POST['txtNombre'] : "";
$txtDireccion = (isset($_POST['txtDireccion'])) ? $_POST['txtDireccion'] : "";
$txtTelefono = (isset($_POST['txtTelefono'])) ? $_POST['txtTelefono'] : "";
$txtCorreo = (isset($_POST['txtCorreo'])) ? $_POST['txtCorreo'] : ""; 
$accion = (isset($_POST['accion'])) ? $_POST['accion'] : "";

    switch ($accion) {
        case 'btnAgregar':
            
            $insercionVoluntarios = $conn->prepare(
                "INSERT INTO voluntarios (cc_voluntario, nombre, direccion, telefono, correo) VALUES ('$txtCc_voluntario', '$txtNombre', '$txtDireccion',
                 '$txtTelefono', '$txtCorreo')");

                $insercionVoluntarios->execute();
                $conn->close();
                header('location: index.php');

            break;

        case 'btnModificar':
            $editarVoluntarios = $conn->prepare("UPDATE voluntarios SET nombre='$txtNombre', direccion='$txtDireccion', telefono = '$txtTelefono',
            correo='$txtCorreo' where cc_voluntario='$txtCc_voluntario'");
            
            $editarVoluntarios->execute();
            $conn->close();

            header('location: index.php');

            break;

        case 'btnEliminar':

            $eliminarVoluntario = $conn->prepare("DELETE FROM voluntarios WHERE cc_voluntario ='$txtCc_voluntario'");
        
            $eliminarVoluntario->execute();
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
    
/* Consultamos todos los voluntarios  */
$consultaVoluntarios = $conn->prepare("SELECT * FROM voluntarios");
$consultaVoluntarios->execute();
$listaVoluntarios = $consultaVoluntarios->get_result();
$conn->close();