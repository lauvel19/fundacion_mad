<?php include 'codeDonante.php'; ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donante</title>
    <!-- link Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

 
 
</head>

<body>
    <div class="container">

        <!-- enctype="multipart/form-data" se utiliza para tratar la fotografia -->
        <form action="" method="post" enctype="multipart/form-data">



            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- cabecera del modal -->
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Datos Del Donante</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <!-- Cuerpo del modal -->
                        <div class="modal-body">

                            <div class="form-row">

                            <div class="form-group col-md-12">
                                    <label for="txtCc_donante">Identificacion</label>
                                    <input type="text" class="form-control" require name="txtCc_donante" id="txtCc_donante" placeholder="" value="<?php echo $txtCc_donante ?>">
                                    <br>
                                </div>


                                <div class="form-group col-md-12">
                                    <label for="txtNombre">Nombre</label>
                                    <input type="text" class="form-control" require name="txtNombre" id="txtNombre" placeholder="" value="<?php echo $txtNombre ?>">
                                    <br>
                                </div>


                                <div class="form-group col-md-12">
                                    <label for="txtDireccion">Direccion</label>
                                    <input type="text" class="form-control" require name="txtDireccion" id="txtDireccion" placeholder="" value="<?php echo $txtDireccion ?>">

                                </div>

                                <div class="form-group col-md-12">
                                    <label for="txtTelefono">Telefono</label>
                                    <input type="text" class="form-control" require name="txtTelefono" id="txtTelefono" placeholder="" value="<?php echo $txtTelefono ?>">

                                </div>

                                <div class="form-group col-md-12">
                                    <label for="txtMonto_donacion">Monto de Donacion</label>
                                    <input type="text" class="form-control" require name="txtMonto_donacion" id="txtMonto_donacion" placeholder="" value="<?php echo $txtMonto_donacion ?>">
                                    <br>
                                </div>

                            </div>
                        </div>

                        <!-- Pie/Footer del modal -->
                        <div class="modal-footer">

                            <button value="btnAgregar" class="btn btn-success" type="submit" name="accion">Agregar</button>
                            <button value="btnModificar" class="btn btn-warning" type="submit" name="accion">Modificar</button>
                            <button value="btnEliminar" class="btn btn-danger" type="submit" name="accion">Eliminar</button>
                            <button value="btnCancelar" class="btn btn-primary" type="submit" name="accion">Cancelar</button>

                        </div>

                    </div>
                </div>
            </div>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Agregar Donante
            </button>





        </form>
        <!-- Final del Formulario -->


        <div class="row">


            <table class="table table-hover table-bordered">

                <thead class="thead-dark">

                    <tr>
                        <th scope="col">Identificacion</th>
                        <th scope="col">Nombres</th>
                        <th scope="col">Direccion</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Monto de Donacion</th>
                        <th scope="col">Seleccionar</th>
                        <th scope="col">Eliminar</th>
                    </tr>

                </thead>
                <tbody>

                    <?php

                    /* Pregunto que si la variable listaDonantes tiene algun contenido */
                    if ($listaDonantes->num_rows > 0) {

                        foreach ($listaDonantes as $donantes) {


                    ?>

                            <tr>

                                <td> <?php echo $donantes['cc_donante']        ?> </td>
                                <td> <?php echo $donantes['nombre']    ?> </td>
                                <td> <?php echo $donantes['direccion'] ?> </td>
                                <td> <?php echo $donantes['telefono'] ?> </td>
                                <td> <?php echo $donantes['monto_donacion']    ?> </td>



                                <form action="" method="post">

                                    <input type="hidden" name="txtCc_donante" value="<?php echo $donantes['cc_donante'];  ?>">
                                    <input type="hidden" name="txtNombre" value="<?php echo $donantes['nombre'];  ?>">
                                    <input type="hidden" name="txtDireccion" value="<?php echo $donantes['direccion'];  ?>">
                                    <input type="hidden" name="txtTelefono" value="<?php echo $donantes['telefono'];  ?>">
                                    <input type="hidden" name="txtMonto_donacion" value="<?php echo $donantes['monto_donacion'];  ?>">

                                    <td><input type="submit" class="btn btn-info" value="Seleccionar"></td>
                                    <td><button value="btnEliminar" class="btn btn-danger" type="submit" name="accion">Eliminar</button></td>

                                </form>


                            </tr>


                    <?php

                        }
                    } else {

                        echo "<h2> No tenemos resultados </h2>";
                    }

                    ?>


                </tbody>
            </table>

        </div>

    </div>




    <!-- link Bootstrap JS -->
    <script src="../js/bootstrap.bundle.min.js"></script>

    <!-- Instrucciones de uso  https://sweetalert.js.org/guides/#installation -->
    <script src="../js/sweetalert.js"></script>

    <!-- <script>
        swal("Mensaje Principal!", "Mensaje segundario!", "success");
    </script> -->

</body>

</html>