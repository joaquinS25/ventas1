  <div class="container-fluid px-4">
                        <h1 class="mt-4">Proveedores</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Proveedores</li>
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
                                Lista de Proveedors
                            </div>
                            <div class="card-body">
                                <!-- <form action="proveedor_listar.php" method="post"> -->
                                    <table id="datatablesSimple">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nombres</th>
                                                <th>RUC</th>
                                                <th>Celular</th>
                                                <th>Email</th>
                                                <th>Dirección</th>
                                                <th>Editar</th>
                                                <th>Eliminar</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>#</th>
                                                <th>Nombres</th>
                                                <th>RUC</th>
                                                <th>Celular</th>
                                                <th>Email</th>
                                                <th>Dirección</th>
                                                <th>Editar</th>
                                                <th>Eliminar</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                                <?php 
                                                $n=0;
                                                foreach ($proveedors as $key => $value) 
                                                {
                                                    $n++;
                                                    $id_proveedor = $value['id_proveedor'];
                                                    $nom_proveedor = $value['nom_proveedor'];
                                                    $ruc_proveedor = $value['ruc_proveedor'];
                                                    $cel_proveedor = $value['cel_proveedor'];
                                                    $email_proveedor = $value['email_proveedor'];
                                                    $dir_proveedor = $value['dir_proveedor'];

                                                    $id_modal = "#modal".$id_proveedor;
                                                    $modal = "modal".$id_proveedor;
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $n; ?></td>
                                                        <td><?php echo $nom_proveedor; ?></td>
                                                        <td><?php echo $ruc_proveedor; ?></td>
                                                        <td><?php echo $cel_proveedor; ?></td>
                                                        <td><?php echo $email_proveedor; ?></td>
                                                        <td><?php echo $dir_proveedor; ?></td>
                                                        <td>
                                                            <!--
                                                                <button name="editar" type="submit" value="<?php echo $id_proveedor; ?>" class="btn btn-sm btn-primary">Editar</button>
                                                            -->
                                                                <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="<?php echo $id_modal; ?>">Editar</button>
                                                        </td>
                                                        <td>
                                                            <!--
                                                                <button name="eliminar" type="submit" value="<?php echo $id_proveedor; ?>"  class="btn btn-sm btn-danger" onclick="return confirm('Esta seguro de eliminar?');">Eliminar</button>
                                                            -->
                                                           
                                                                <button name="eliminar" type="button" value="<?php echo $id_proveedor; ?>"  class="btn btn-sm btn-danger" onclick="return Eliminar(this);">Eliminar</button>
                                                             
                                                        </td>
                                                    </tr>
                                                    
                                                    <!-- Modal -->   
                                                    <div class="modal fade" id="<?php echo $modal; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">

                                                                <div class="modal-header">
                                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Proveedor</h1>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>

                                                                <form action="proveedor_editar.php" method="post">                                          
                                                                    
                                                                    <div class="modal-body">

                                                                            <div class="mb-3">
                                                                                <label for="recipient-name" class="col-form-label">Nombres:</label>
                                                                                <input type="text" name="nom" value="<?php echo $nom_proveedor; ?>" class="form-control" placeholder="Nombres" aria-label="Nombres" required="required">
                                                                            </div>

                                                                            <div class="mb-3">
                                                                                <label for="message-text" class="col-form-label">RUC:</label>
                                                                                <input type="text" name="ruc" value="<?php echo $ruc_proveedor; ?>"  class="form-control" placeholder="RUC" aria-label="RUC" required="required">
                                                                            </div>

                                                                            <div class="mb-3">
                                                                                <label for="message-text" class="col-form-label">Celular:</label>
                                                                                <input type="text" name="cel" value="<?php echo $cel_proveedor; ?>"  class="form-control" placeholder="Celular" aria-label="Celular" required="required">
                                                                            </div>

                                                                            <div class="mb-3">
                                                                                <label for="message-text" class="col-form-label">Email:</label>
                                                                                <input type="text" name="email" value="<?php echo $email_proveedor; ?>"  class="form-control" placeholder="Email" aria-label="Email" required="required">
                                                                            </div>

                                                                            <div class="mb-3">
                                                                                <label for="message-text" class="col-form-label">Dirección:</label>
                                                                                <input type="text" name="dir" value="<?php echo $dir_proveedor; ?>"  class="form-control" placeholder="Dirección" aria-label="Dirección" required="required">
                                                                            </div>
                                                                        
                                                                    </div>
                                                                
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                                                        <button type="submit" name="actualizar" value="<?php echo $id_proveedor; ?>" class="btn btn-primary">Actualizar</button>      
                                                                    </div>

                                                                </form>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Modal -->

                                                    <?php 
                                                }
                                                ?>
                                        
                                        </tbody>
                                    </table>
                                <!-- </form> -->
                            </div>
                        </div>
 </div>


