<?php
session_start();
require("modelo/m_usuario.php");
require("modelo/m_venta.php");

if (!isset($_GET['id_venta'])) {
    die("No se especificó la venta.");
}

$id_venta = $_GET['id_venta'];

// Llamar a la función que trae los detalles de esa venta
$ventasDetalle = ObtenerDetalleVenta($id_venta);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Detalle de la Venta</title>
    <?php require("vista/estilos.php"); ?>
    <style>
        .hidden {
            display: none;
        }

        .containerr {
            max-width: 1600px;
            background: #fafafa;
        }

        .inputd:disabled {
            border: none;
            background: transparent;
            color: black;
            outline: none;
        }

        .posicion {
            margin-right: 16%;
        }

        html,
        body {
            height: 100%;
            margin: 0;
        }

        #wrapper {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        #content-wrapper {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        footer {
            margin-top: auto;
        }

        .containerr {
            flex: 1;
            /* Ocupar todo el espacio disponible */
            display: flex;
            flex-direction: column;
            /* Para que la tabla y demás elementos se acomoden verticalmente */
            background: #fafafa;
            padding: 20px;
        }
    </style>
</head>

<body>

    <div id="wrapper">
        <div id="content-wrapper" class="d-flex flex-column" style="background-color: gray;">
            <div id="content">
                <nav class="navbar navbar-expand navbar-light bg-dark topbar static-top shadow justify-content-center">
                    <div class="navbar-brand">
                        <h2 class="text-light">DETALLE DE LA VENTA</h2>
                    </div>
                </nav>
            </div>

            <div class="container containerr">
                <div class="row mt-5 py-3">
                    <h2>DETALLE DE LA VENTA #<?php echo $id_venta; ?></h2>
                </div>
                <hr>
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>ID Venta</th>
                            <th>Nombre Producto</th>
                            <th>Precio Venta</th>
                            <th>Cantidad</th>
                            <th>Total de la Venta</th>
                            <th>Medio de Pago</th>
                            <th>Tipo de Comprobante</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>ID Venta</th>
                            <th>Nombre Producto</th>
                            <th>Precio Venta</th>
                            <th>Cantidad</th>
                            <th>Total de la Venta</th>
                            <th>Medio de Pago</th>
                            <th>Tipo de Comprobante</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        $n = 0;
                        foreach ($ventasDetalle as $value) {
                            $n++;
                            $nom_producto        = $value['nom_producto'];
                            $prec_ventadetalle   = $value['prec_ventadetalle'];
                            $cant_ventadetalle   = $value['cant_ventadetalle'];
                            $tot_ventadetalle    = $value['tot_ventadetalle'];
                            $nom_mediopago       = $value['nom_mediopago'];
                            $nom_tipocomprobante = $value['nom_tipocomprobante'];
                        ?>
                            <tr>
                                <td><?php echo $n; ?></td>
                                <td><?php echo $id_venta; ?></td>
                                <td><?php echo $nom_producto; ?></td>
                                <td><?php echo $prec_ventadetalle; ?></td>
                                <td><?php echo $cant_ventadetalle; ?></td>
                                <td><?php echo $tot_ventadetalle; ?></td>
                                <td><?php echo $nom_mediopago; ?></td>
                                <td><?php echo $nom_tipocomprobante; ?></td>
                            </tr>

                        <?php
                            
                        }
                        ?>
                    </tbody>
                </table>

                <br>
                <div class="row py-4">
                    <div class="col-9"></div>
                    <div class="col-3 text-end">
                        <a href="venta_listar.php" class="btn btn-secondary" id="regresable">Regresar</a>
                    </div>
                </div>
                <br><br><br><br><br>
            </div>

            <footer class="sticky-footer bg-white">
                <div class="my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Página protegida por derechos de autor 2025</span>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <?php require("vista/scripts.php"); ?>
</body>

</html>