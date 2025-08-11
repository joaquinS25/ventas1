  <div class="container-fluid px-4">
      <h1 class="mt-4">Venta</h1>
      <ol class="breadcrumb mb-4">
          <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
          <li class="breadcrumb-item active">Venta</li>
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
              Lista de Ventas
          </div>
          <div class="card-body">
              <!-- <form action="mediopago_listar.php" method="post"> -->
              <table id="datatablesSimple">
                  <thead>
                      <tr>
                          <th>#</th>
                          <th>ID</th>
                          <th>Cliente</th>
                          <th>Medio de Pago</th>
                          <th>Tipo Comprobante</th>
                          <th>Usuario</th>
                          <th>Fecha</th>
                          <th>Estado</th>
                          <th>Detalle</th>
                          <th>Anular</th>
                      </tr>
                  </thead>
                  <tfoot>
                      <tr>
                          <th>#</th>
                          <th>ID</th>
                          <th>Cliente</th>
                          <th>Medio de Pago</th>
                          <th>Tipo Comprobante</th>
                          <th>Usuario</th>
                          <th>Fecha</th>
                          <th>Estado</th>
                          <th>Detalle</th>
                          <th>Anular</th>
                      </tr>
                  </tfoot>
                  <tbody>
                      <?php
                        $n = 0;
                        foreach ($ventas as $key => $value) {
                            $n++;
                            $id_venta = $value['id_venta'];
                            $nom_cliente = $value['nom_cliente'];
                            $ape_cliente = $value['ape_cliente'];
                            $nom_usuario = $value['nom_usuario'];
                            $ape_usuario = $value['ape_usuario'];
                            $nom_mediopago = $value['nom_mediopago'];
                            $nom_tipocomprobante = $value['nom_tipocomprobante'];
                            $fec_venta = $value['fec_venta'];

                            $est_venta = $value['est_venta'];
                            if ($est_venta == 1) {
                                $estado = "Activo";
                            } else {
                                $estado = "Anulado";
                            }
                            $id_modal = "#modal" . $id_venta;
                            $modal = "modal" . $id_venta;
                        ?>
                          <tr>
                              <td><?php echo $n; ?></td>
                              <td><?php echo $id_venta; ?></td>
                              <td><?php echo $nom_cliente . " " . $ape_cliente; ?></td>
                              <td><?php echo $nom_mediopago; ?></td>
                              <td><?php echo $nom_tipocomprobante; ?></td>
                              <td><?php echo $nom_usuario . " " . $ape_usuario; ?></td>
                              <td><?php echo $fec_venta; ?></td>
                              <td><?php echo $estado; ?></td>

                              <td>
                                  <!--button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="<?php echo $id_modal; ?>"><i class="center bi bi-card-text"></i></button-->
                                  <a class="btn btn-sm btn-primary" href="venta_detalle.php?id_venta=<?php echo $id_venta; ?>">
                                      <i class="center bi bi-card-text"></i>
                                  </a>

                              </td>
                              <td>
                                  <button name="anular" type="button" value="<?php echo $id_venta; ?>" class="btn btn-sm btn-danger" onclick="return Anular(this);"><i class="bi bi-archive-fill"></i></button>

                              </td>
                          </tr>


                      <?php
                        }
                        ?>

                  </tbody>
              </table>
              <!-- </form> -->
          </div>
      </div>
  </div>