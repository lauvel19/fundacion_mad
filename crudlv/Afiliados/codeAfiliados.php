<!-- Instrucciones de uso  https://sweetalert.js.org/guides/#installation -->
<script src="../js/sweetalert.js"></script>

<?php
// Incluimos la conexión a la base de datos 
include("../Conexion/conexion.php"); 

// Recibimos las variables enviadas
$txtCc_afiliado = (isset($_POST['txtCc_afiliado'])) ? $_POST['txtCc_afiliado'] : "";
$txtNombre = (isset($_POST['txtNombre'])) ? $_POST['txtNombre'] : "";
$txtFecha = (isset($_POST['txtFecha'])) ? $_POST['txtFecha'] : "";
$txtApoyo_familiar = (isset($_POST['txtApoyo_familiar'])) ? $_POST['txtApoyo_familiar'] : "";
$txtNivel_independencia = (isset($_POST['txtNivel_independencia'])) ? $_POST['txtNivel_independencia'] : "";
$txtNivel_sisben = (isset($_POST['txtNivel_sisben'])) ? $_POST['txtNivel_sisben'] : "";
$txtEPS = (isset($_POST['txtEPS'])) ? $_POST['txtEPS'] : "";
$txtTipo_afiliacion = (isset($_POST['txtTipo_afiliacion'])) ? $_POST['txtTipo_afiliacion'] : "";
$txtApoyo = (isset($_POST['txtApoyo'])) ? $_POST['txtApoyo'] : "";
$txtDiscapacidad = (isset($_POST['txtDiscapacidad'])) ? $_POST['txtDiscapacidad'] : "";
$txtPatologias = (isset($_POST['txtPatologias'])) ? $_POST['txtPatologias'] : "";
$txtCorreo_electrónico = (isset($_POST['txtCorreo_electrónico'])) ? $_POST['txtCorreo_electrónico'] : "";
$txtDireccion = (isset($_POST['txtDireccion'])) ? $_POST['txtDireccion'] : "";
$txtTelefono_fijo = (isset($_POST['txtTelefono_fijo'])) ? $_POST['txtTelefono_fijo'] : "";
$txtTelefono_movil = (isset($_POST['txtTelefono_movil'])) ? $_POST['txtTelefono_movil'] : "";
$txtCc_donante = (isset($_POST['txtCc_donante'])) ? $_POST['txtCc_donante'] : "";
$txtCc_voluntario = (isset($_POST['txtCc_voluntario'])) ? $_POST['txtCc_voluntario'] : "";
$accion = (isset($_POST['accion'])) ? $_POST['accion'] : "";
 
    switch ($accion) {
        case 'btnAgregar':
            
            $insercionAfiliados = $conn->prepare("INSERT INTO afiliados (cc_afiliado, nombre, fecha, apoyo_familiar, nivel_independencia,
            nivel_sisben, EPS, tipo_afiliacion, apoyo, discapacidad, patologias, correo_electrónico, Direccion,
            telefono_fijo, Telefono_movil) VALUES ('$txtCc_afiliado', '$txtNombre', '$txtFecha', '$txtApoyo_familiar',
            '$txtNivel_independencia', '$txtNivel_sisben', '$txtEPS', '$txtTipo_afiliacion', '$txtApoyo', '$txtDiscapacidad',
            '$txtPatologias', '$txtCorreo_electrónico', '$txtDireccion', '$txtTelefono_fijo', '$txtTelefono_movil')");

            $insercionAfiliados->execute();
            $conn->close();

            header('location: index.php');

            break;
            
    
        case 'btnModificar':
            
            $editarAfiliados = $conn->prepare("UPDATE afiliados SET nombre='$txtNombre', fecha='$txtFecha',
            apoyo_familiar='$txtApoyo_familiar', nivel_independencia='$txtNivel_independencia', nivel_sisben='$txtNivel_sisben', EPS='$txtEPS',
            tipo_afiliacion='$txtTipo_afiliacion', apoyo='$txtApoyo', discapacidad='$txtDiscapacidad', patologias='$txtPatologias',
            Direccion='$txtDireccion', correo_electrónico='$txtCorreo_electrónico', telefono_fijo='$txtTelefono_fijo', Telefono_movil='$txtTelefono_movil'
            WHERE cc_afiliado='$txtCc_afiliado'");
    
            $editarAfiliados->execute();
            $conn->close();

            header('location: index.php');

            break;

        case 'btnEliminar': 

            $eliminarAfiliado = $conn->prepare("DELETE FROM afiliados WHERE cc_afiliado ='$txtCc_afiliado'");

            $eliminarAfiliado->execute();
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
    
/* Consultamos todos los afiliados  */
$consultaAfiliados = $conn->prepare("SELECT * FROM afiliados");
$consultaAfiliados->execute();
$listaAfiliados = $consultaAfiliados->get_result();
$conn->close();