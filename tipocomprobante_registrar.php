<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Registro de Tipo de Comprobante</title>
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
                    require("modelo/m_tipocomprobante.php");

                    if(isset($_REQUEST['registrar']))
                    {
                        $nom_tipocomprobante = $_REQUEST['nom_tipocomprobante'];

                        $rpta = RegistrarTipocomprobante($nom_tipocomprobante);

                        if($rpta=="SI")
                        {
                            ?>
                            <script type="text/javascript">
                                location.href="tipocomprobante_listar.php";
                            </script>
                            <?php
                        }

                    }

                    require("vista/v_tipocomprobante_registrar.php");
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
