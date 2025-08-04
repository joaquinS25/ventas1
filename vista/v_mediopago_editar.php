<div class="container-fluid px-4">Medios de pago
    <h1 class="mt-4">Medio de pago</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active">Medio de pago</li>
    </ol>

    <div class="card mb-4">
       <div class="card-header">
            <i class="fas fa-table me-1"></i>Edición de Medio de pago
        </div>
        <div class="card-body">


            <form action="mediopago_editar.php" method="post">

                <div class="row g-3">
                  
                  <div class="col-md-6">
                    <input type="text" name="nom" value="<?php echo $nom_mediopago; ?>" class="form-control" placeholder="Nombre" aria-label="Nombre" required="required">


                  <div class="col-md-12">
                    <button type="submit" name="actualizar" value="<?php echo $id_mediopago; ?>" class="btn btn-primary">Actualizar</button>
                  </div>

                </div>

            </form>

    


        </div>
    </div>  
</div>      