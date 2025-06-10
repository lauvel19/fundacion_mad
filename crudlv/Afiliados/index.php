    <?php include 'codeAfiliados.php'; ?>
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Afiliado</title>
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
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Datos Del Afiliado</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>

                            <!-- Cuerpo del modal -->
                            <div class="modal-body">

                            <div class="form-row">

                            <div class="form-group col-md-12">
                                        <label for="txtCc_afiliado">Identificacion</label>
                                        <input type="text" class="form-control" required name="txtCc_afiliado" id="txtCc_afiliado" placeholder="" value="<?php echo $txtCc_afiliado ?>">
                                        <br>
                                    </div>
 
                                    <div class="form-group col-md-12">
                                        <label for="txtNombre">Nombre</label>
                                        <input type="text" class="form-control" require name="txtNombre" id="txtNombre" placeholder="" value="<?php echo $txtNombre ?>">
                                        <br>
                                    </div>


                                    <div class="form-group col-md-12">
                                        <label for="txtFecha">Fecha</label>
                                        <input type="date" class="form-control" require name="txtFecha" id="txtFecha" placeholder="" value="<?php echo $txtFecha ?>">

                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="txtApoyo_familiar">Apoyo Familiar</label>
                                        <input type="text" class="form-control" require name="txtApoyo_familiar" id="txtApoyo_familiar" placeholder="" value="<?php echo $txtApoyo_familiar ?>">

                                    </div>
                                    
                                    <div class="form-group col-md-12">
                                        <label for="txtNivel_independencia">Nivel de Independencia</label>
                                        <input type="text" class="form-control" require name="txtNivel_independencia" id="txtNivel_independencia" placeholder="" value="<?php echo $txtNivel_independencia ?>">

                                    </div>
                                    
                                    <div class="form-group col-md-12">
                                        <label for="txtNivel_sisben">Nivel Sisben</label>
                                        <input type="text" class="form-control" require name="txtNivel_sisben" id="txtNivel_sisben" placeholder="" value="<?php echo $txtNivel_sisben ?>">

                                    </div>

                                    
                                    <div class="form-group col-md-12">
                                        <label for="txtEPS">EPS </label>
                                        <input type="text" class="form-control" require name="txtEPS" id="txtEPS" placeholder="" value="<?php echo $txtEPS ?>">

                                    </div>

                                    
                                    <div class="form-group col-md-12">
                                        <label for="txtTipo_afiliacion">Tipo de Afiliacion </label>
                                        <input type="text" class="form-control" require name="txtTipo_afiliacion" id="txtTipo_afiliacion" placeholder="" value="<?php echo $txtTipo_afiliacion ?>">

                                    </div>

                                    
                                    <div class="form-group col-md-12">
                                        <label for="txtApoyo">Apoyo  </label>
                                        <input type="text" class="form-control" require name="txtApoyo" id="txtApoyo" placeholder="" value="<?php echo $txtApoyo ?>">

                                    </div>

                                    
                                    <div class="form-group col-md-12">
                                        <label for="txtDiscapacidad">Discapacidad </label>
                                        <input type="text" class="form-control" require name="txtDiscapacidad" id="txtDiscapacidad" placeholder="" value="<?php echo $txtDiscapacidad ?>">

                                    </div>

                                    
                                    <div class="form-group col-md-12">
                                        <label for="txtPatologias">Patologias </label>
                                        <input type="text" class="form-control" require name="txtPatologias" id="txtPatologias" placeholder="" value="<?php echo $txtPatologias ?>">

                                    </div>

                                    
                                    
                                    <div class="form-group col-md-12">
                                        <label for="txtDireccion">Direccion </label>
                                        <input type="text" class="form-control" require name="txtDireccion" id="txtDireccion" placeholder="" value="<?php echo $txtDireccion ?>">

                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="txtCorreo_electrónico">Correo</label>
                                        <input type="email" class="form-control" require name="txtCorreo_electrónico" id="txtCorreo_electrónico" placeholder="" value="<?php echo $txtCorreo_electrónico ?>">
                                        <br>
                                    </div>

                                    
                                    <div class="form-group col-md-12">
                                        <label for="txtTelefono_fijo">Telefono Fijo </label>
                                        <input type="text" class="form-control" require name="txtTelefono_fijo" id="txtTelefono_fijo" placeholder="" value="<?php echo $txtTelefono_fijo ?>">

                                    </div>

                                    
                                    <div class="form-group col-md-12">
                                        <label for="txtTelefono_movil">Telefono Movil </label>
                                        <input type="text" class="form-control" require name="txtTelefono_movil" id="txtTelefono_movil" placeholder="" value="<?php echo $txtTelefono_movil ?>">

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
                    Agregar Afiliado
                </button>





            </form>
            <!-- Final del Formulario -->


            <div class="row">


                <table class="table table-hover table-bordered">

                    <thead class="thead-dark">

                        <tr>
                            <th scope="col">Identificacion</th>
                            <th scope="col">Nombres</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Apoyo Familiar</th>
                            <th scope="col">Nivel de Independencia</th>
                            <th scope="col">Nivel de Sisben</th>
                            <th scope="col">EPS</th>
                            <th scope="col">Tipo de Afiliacion</th>
                            <th scope="col">Apoyo para caminar</th>
                            <th scope="col">Discapacidad</th>
                            <th scope="col">Patologias</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Direccion</th>
                            <th scope="col">Telefono Fijo</th>
                            <th scope="col">Telefono Movil</th>
                            <th scope="col">Seleccionar</th>
                            <th scope="col">Eliminar</th>
                        </tr>

                    </thead>
                    <tbody>

                        <?php

                        /* Pregunto que si la variable listaAfiliados tiene algun contenido */
                        if ($listaAfiliados->num_rows > 0) {

                            foreach ($listaAfiliados as $afiliados) {


                        ?>

                                <tr>
                                <td> <?php echo $afiliados['cc_afiliado']  ?> </td>
                                    <td> <?php echo $afiliados['nombre']    ?> </td>
                                    <td> <?php echo $afiliados['fecha'] ?> </td>
                                    <td> <?php echo $afiliados['apoyo_familiar'] ?> </td>
                                    <td> <?php echo $afiliados['nivel_independencia'] ?> </td>
                                    <td> <?php echo $afiliados['nivel_sisben'] ?> </td>
                                    <td> <?php echo $afiliados['EPS'] ?> </td>
                                    <td> <?php echo $afiliados['tipo_afiliacion'] ?> </td>
                                    <td> <?php echo $afiliados['apoyo'] ?> </td>
                                    <td> <?php echo $afiliados['discapacidad'] ?> </td>
                                    <td> <?php echo $afiliados['patologias'] ?> </td>
                                    <td> <?php echo $afiliados['Direccion'] ?> </td>
                                    <td> <?php echo $afiliados['correo_electrónico'] ?> </td>
                                    <td> <?php echo $afiliados['telefono_fijo'] ?> </td>
                                    <td> <?php echo $afiliados['Telefono_movil'] ?> </td>

                                    <form action="" method="post">
                                        
                                        <input type="hidden" name="txtNombre" value="<?php echo $afiliados['nombre'];  ?>">
                                        <input type="hidden" name="txtFecha" value="<?php echo $afiliados['fecha'];  ?>">
                                        <input type="hidden" name="txtApoyo_familiar" value="<?php echo $afiliados['apoyo_familiar'];  ?>">
                                        <input type="hidden" name="txtNivel_independencia" value="<?php echo $afiliados['nivel_independencia'];  ?>">
                                        <input type="hidden" name="txtNivel_sisben" value="<?php echo $afiliados['nivel_sisben'];  ?>">
                                        <input type="hidden" name="txEPS" value="<?php echo $afiliados['EPS'];  ?>">
                                        <input type="hidden" name="txtTipo_afiliacion" value="<?php echo $afiliados['tipo_afiliacion'];  ?>">
                                        <input type="hidden" name="txtApoyo" value="<?php echo $afiliados['apoyo'];  ?>">
                                        <input type="hidden" name="txtDiscapacidad" value="<?php echo $afiliados['discapacidad'];  ?>">
                                        <input type="hidden" name="txtPatologias" value="<?php echo $afiliados['patologias'];  ?>">
                                        <input type="hidden" name="txtDireccion" value="<?php echo $afiliados['Direccion'];  ?>">
                                        <input type="hidden" name="txtCorreo_electrónico" value="<?php echo $afiliados['correo_electrónico'];  ?>">
                                        <input type="hidden" name="txtTelefono_fijo" value="<?php echo $afiliados['telefono_fijo'];  ?>">
                                        <input type="hidden" name="txtTelefono_movil" value="<?php echo $afiliados['Telefono_movil'];  ?>">
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