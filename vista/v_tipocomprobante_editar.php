<div class="container-fluid px-4">Tipos de Comprobante
    <h1 class="mt-4">Tipo de Comprobante</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active">Tipo de Comprobante</li>
    </ol>

    <div class="card mb-4">
       <div class="card-header">
            <i class="fas fa-table me-1"></i>Edición de Tipo de Comprobante
        </div>
        <div class="card-body">


            <form action="tipocomprobante_editar.php" method="post">

                <div class="row g-3">
                  
                  <div class="col-md-6">
                    <input type="text" name="nom_tipocomprobante" value="<?php echo $nom_tipocomprobante; ?>" class="form-control" placeholder="Nombre Comprobante" aria-label="Nombre Comprobante" required="required">


                  <div class="col-md-12">
                    <button type="submit" name="actualizar" value="<?php echo $id_tipocomprobante; ?>" class="btn btn-primary">Actualizar</button>
                  </div>

                </div>

            </form>

    


        </div>
    </div>  
</div>      