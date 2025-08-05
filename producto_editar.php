<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Edición de Producto</title>
        <?php
         require("vista/estilos.php");
        ?>
    </head>
    <body class="sb-nav-fixed">
        
        <?php
         require("vista/menuh.php");
        ?>

        <div id="layoutSidenav">
          
            <?php
            require("vista/menuv.php");
            ?>

            <div id="layoutSidenav_content">
                <main>
                    <?php 
                    require("modelo/m_producto.php");

                    //Si se presiona el boton actualizar
                    if(isset($_REQUEST['actualizar']))
                    {
                        $id_producto = $_REQUEST['actualizar'];
                        $nom_producto = $_REQUEST['nom_producto'];
                        $prev_producto = $_REQUEST['prev_producto'];
                        $prec_producto = $_REQUEST['prec_producto'];
                        $desc_producto = $_REQUEST['desc_producto'];
                        $rpta = ActualizarProducto($id_producto,$nom_producto,$prev_producto,$prec_producto,$desc_producto);

                        if($rpta=="SI")
                        {
                            ?>
                            <script type="text/javascript">
                                alert("Se actualizó correctamente");
                                location.href="producto_listar.php";
                            </script>
                            <?php
                        }

                    }

                    $id_producto =  $_REQUEST['id_producto'];

                    $producto = ConsultarProducto($id_producto);
                    foreach ($producto as $key => $value) 
                    {
                        $nom_producto = $value['nom_producto'];
                        $prev_producto = $value['prev_producto'];
                        $prec_producto = $value['prec_producto'];
                        $desc_producto = $value['desc_producto'];
                    }

                    require("vista/v_producto_editar.php");
                    ?>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <?php
                    require("vista/footer.php");
                    ?>   
                </footer>
            </div>
        </div>
        <?php
        require("vista/scripts.php");
        ?>  
    </body>
</html>
