<div class="container-fluid px-4">
    <h1 class="mt-4">Proveedores</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active">Proveedores</li>
    </ol>

    <div class="card mb-4">
       <div class="card-header">
            <i class="fas fa-table me-1"></i>Edición de Proveedor
        </div>
        <div class="card-body">


            <form action="proveedor_editar.php" method="post">

                <div class="row g-3">
                  
                  <div class="col-md-5">
                    <input type="text" name="nom" value="<?php echo $nom_proveedor; ?>" class="form-control" placeholder="Nombres" aria-label="Nombres" required="required">
                  </div>

                   <div class="col-md-2">
                    <input type="text" name="ruc" value="<?php echo $ruc_proveedor; ?>"  class="form-control" placeholder="RUC" aria-label="RUC" required="required">
                  </div>

                  <div class="col-md-2">
                    <input type="text" name="cel" value="<?php echo $cel_proveedor; ?>"  class="form-control" placeholder="Celular" aria-label="Celular" required="required">
                  </div>

                  <div class="col-md-4">
                    <input type="text" name="email" value="<?php echo $email_proveedor; ?>"  class="form-control" placeholder="Email" aria-label="Email" required="required">
                  </div>

                  <div class="col-md-6">
                    <input type="text" name="dir" value="<?php echo $dir_proveedor; ?>"  class="form-control" placeholder="Dirección" aria-label="Dirección" required="required">
                  </div>

                  <div class="col-md-12">
                    <button type="submit" name="actualizar" value="<?php echo $id_proveedor; ?>" class="btn btn-primary">Actualizar</button>
                  </div>

                </div>

            </form>

    


        </div>
    </div>  
</div>      