  <div class="container-fluid px-4">
                        <h1 class="mt-4">Productos</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Productos</li>
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
                                Lista de Productos
                            </div>
                            <div class="card-body">
                                <!-- <form action="prodcuto_listar.php" method="post"> -->
                                    <table id="datatablesSimple">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nombres</th>
                                                <th>Precio Compra</th>
                                                <th>Precio Venta</th>
                                                <th>Descripcion</th>
                                                <th>Editar</th>
                                                <th>Eliminar</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                               <th>#</th>
                                                <th>Nombres</th>
                                                <th>Precio Compra</th>
                                                <th>Precio Venta</th>
                                                <th>Descripcion</th>
                                                <th>Editar</th>
                                                <th>Eliminar</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                                <?php 
                                                $n=0;
                                                foreach ($productos as $key => $value) 
                                                {
                                                    $n++;
                                                    $id_producto = $value['id_producto'];
                                                    $nom_producto = $value['nom_producto'];
                                                    $prec_producto = $value['prec_producto'];
                                                    $prev_producto = $value['prev_producto'];
                                                    $desc_producto = $value['desc_producto'];

                                                    $id_modal = "#modal".$id_producto;
                                                    $modal = "modal".$id_producto;
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $n; ?></td>
                                                        <td><?php echo $nom_producto; ?></td>
                                                        <td><?php echo $prec_producto; ?></td>
                                                        <td><?php echo $prev_producto; ?></td>
                                                        <td><?php echo $desc_producto; ?></td>
                                                        <td>
                                                            <!--
                                                                <button name="editar" type="submit" value="<?php echo $id_producto; ?>" class="btn btn-sm btn-primary">Editar</button>
                                                            -->
                                                                <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="<?php echo $id_modal; ?>">Editar</button>
                                                        </td>
                                                        <td>
                                                            <!--
                                                                <button name="eliminar" type="submit" value="<?php echo $id_producto; ?>"  class="btn btn-sm btn-danger" onclick="return confirm('Esta seguro de eliminar?');">Eliminar</button>
                                                            -->
                                                           
                                                                <button name="eliminar" type="button" value="<?php echo $id_producto; ?>"  class="btn btn-sm btn-danger" onclick="return Eliminar(this);">Eliminar</button>
                                                             
                                                        </td>
                                                    </tr>
                                                    
                                                    <!-- Modal -->   
                                                    <div class="modal fade" id="<?php echo $modal; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">

                                                                <div class="modal-header">
                                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Producto</h1>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>

                                                                <form action="producto_editar.php" method="post">                                          
                                                                    
                                                                    <div class="modal-body">

                                                                            <div class="mb-3">
                                                                                <label for="recipient-name" class="col-form-label">Nombre Producto:</label>
                                                                                <input type="text" name="nom_producto" value="<?php echo $nom_producto; ?>" class="form-control" placeholder="Nombres" aria-label="Nombres" required="required">
                                                                            </div>

                                                                            <div class="mb-3">
                                                                                <label for="message-text" class="col-form-label">Precio Compra:</label>
                                                                                <input type="text" name="prec_producto" value="<?php echo $prec_producto; ?>"  class="form-control" placeholder="RUC" aria-label="RUC" required="required">
                                                                            </div>

                                                                            <div class="mb-3">
                                                                                <label for="message-text" class="col-form-label">Precion Venta:</label>
                                                                                <input type="text" name="prev_producto" value="<?php echo $prev_producto; ?>"  class="form-control" placeholder="Celular" aria-label="Celular" required="required">
                                                                            </div>

                                                                            <div class="mb-3">
                                                                                <label for="message-text" class="col-form-label">Descripcion:</label>
                                                                                <input type="text" name="desc_producto" value="<?php echo $desc_producto; ?>"  class="form-control" placeholder="Email" aria-label="Email" required="required">
                                                                            </div>
                                                                        
                                                                    </div>
                                                                
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                                                        <button type="submit" name="actualizar" value="<?php echo $id_producto; ?>" class="btn btn-primary">Actualizar</button>      
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


