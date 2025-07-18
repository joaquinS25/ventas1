<div class="container-fluid px-4">
    <h1 class="mt-4">Clientes</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active">Clientes</li>
    </ol>
    <!--
                        <div class="card mb-4">
                            <div class="card-body">
                                DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                                <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                                .
                            </div>
                        </div>
                        -->
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Listar Clientes
        </div>
        <div class="card-body">
            <!--form action="cliente_listar.php" method="post"-->
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Dni</th>
                        <th>Celular</th>
                        <th>Email</th>
                        <th>Direccion</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Dni</th>
                        <th>Celular</th>
                        <th>Email</th>
                        <th>Direccion</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php
                    $n = 0;
                    foreach ($clientes as $key => $value) {
                        $n++;
                        $id_cliente = $value['id_cliente'];
                        $nom_cliente = $value['nom_cliente'];
                        $ape_cliente = $value['ape_cliente'];
                        $dni_cliente = $value['dni_cliente'];
                        $cel_cliente = $value['cel_cliente'];
                        $email_cliente = $value['email_cliente'];
                        $dir_cliente = $value['dir_cliente'];

                        $id_modal = "#modal" . $id_cliente;
                        $modal = "modal" . $id_cliente;
                    ?>
                        <tr>
                            <td><?php echo $n; ?></td>
                            <td><?php echo $nom_cliente; ?></td>
                            <td><?php echo $ape_cliente; ?></td>
                            <td><?php echo $dni_cliente; ?></td>
                            <td><?php echo $cel_cliente; ?></td>
                            <td><?php echo $email_cliente; ?></td>
                            <td><?php echo $dir_cliente; ?></td>
                            <td>
                                <!--button name="editar" value="<?php echo $id_cliente; ?>" type="submit" class="btn btn-primary btn-sm">Editar</button-->
                                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="<?php echo $id_modal; ?>">Editar</button>
                            </td>
                            <td>
                                <!--button name="eliminar" value="<?php echo $id_cliente; ?>" type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Estas seguro de eliminar');">Eliminar</button-->

                               
                                <button name="eliminar" value="<?php echo $id_cliente; ?>" type="button" class="btn btn-danger btn-sm" onclick="return Eliminar(this);">Eliminar</button>
                                
                            </td>

                        </tr>
                        <!--MODAL EDITAR-->
                        <div class="modal fade" id="<?php echo $modal; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Cliente</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="cliente_editar.php" method="post">
                                        <div class="modal-body">

                                            <div class="mb-3">
                                                <label for="recipient-name" class="col-form-label">NOMBRES:</label>
                                                <input name="nom" value="<?php echo $nom_cliente; ?>" class="form-control" id="inputFirstName" type="text" placeholder="Nombres">
                                            </div>
                                            <div class="mb-3">
                                                <label for="message-text" class="col-form-label">APELLIDOS:</label>
                                                <input name="ape" value="<?php echo $ape_cliente; ?>" class="form-control" id="inputLastName" type="text" placeholder="Enter your last name">
                                            </div>
                                            <div class="mb-3">
                                                <label for="recipient-name" class="col-form-label">DNI:</label>
                                                <input name="dni" value="<?php echo $dni_cliente; ?>" class="form-control" id="inputDni" type="text" placeholder="DNI">
                                            </div>
                                            <div class="mb-3">
                                                <label for="message-text" class="col-form-label">CELULAR:</label>
                                                <input name="cel" value="<?php echo $cel_cliente; ?>" class="form-control" id="inputCelular" type="text" placeholder="Celular">
                                            </div>
                                            <div class="mb-3">
                                                <label for="recipient-name" class="col-form-label">EMAIL:</label>
                                                <input name="email" value="<?php echo $email_cliente; ?>" class="form-control" id="inputEmail" type="email" placeholder="Email">
                                            </div>
                                            <div class="mb-3">
                                                <label for="message-text" class="col-form-label">DIRECCION:</label>
                                                <input name="dir" value="<?php echo $dir_cliente; ?>" class="form-control" id="inputDireccion" type="text" placeholder="Direccion">
                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                            <button class="btn btn-primary btn-block" name="actualizar" value="<?php echo $id_cliente; ?>" type="submit">Actualizar</button>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!--MODAL EDITAR-->
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            <!--/form-->
        </div>
    </div>
</div>