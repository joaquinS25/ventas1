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
            Edicion de Clientes
        </div>
        <div class="card-body">

            <form action="cliente_editar.php" method="post">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form-floating mb-3 mb-md-0">
                            <input name="nom" value="<?php echo $nom_cliente; ?>" class="form-control" id="inputFirstName" type="text" placeholder="Nombres" />
                            <label for="inputFirstName">Nombres</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input name="ape" value="<?php echo $ape_cliente; ?>" class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" />
                            <label for="inputLastName">Aplellidos</label>
                        </div>
                    </div>
                </div>
                 <div class="row mb-3">
                    <div class="col-md-3">
                        <div class="form-floating mb-3 mb-md-0">
                            <input name="dni" value="<?php echo $dni_cliente; ?>" class="form-control" id="inputDni" type="text" placeholder="DNI" />
                            <label for="inputDni">DNI</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input name="cel" value="<?php echo $cel_cliente; ?>" class="form-control" id="inputCelular" type="text" placeholder="Celular" />
                            <label for="inputCelular">Celular</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input name="email" value="<?php echo $email_cliente; ?>" class="form-control" id="inputEmail" type="email" placeholder="Email" />
                            <label for="inputEmail">Email</label>
                        </div>
                    </div>
                </div>
                <div class="form-floating mb-3">
                    <input name="dir" value="<?php echo $dir_cliente; ?>" class="form-control" id="inputDireccion" type="text" placeholder="Direccion" />
                    <label for="inputDireccion">Direccion</label>
                </div>
                
                <div class="mt-4 mb-0">
                    <div class="d-grid">
                        <button class="btn btn-primary btn-block" name="actualizar" value="<?php echo $id_cliente; ?>" type="submit">Actualizar</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>