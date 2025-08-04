<div class="container-fluid px-4">
    <h1 class="mt-4">Proveedores</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active">Proveedores</li>
    </ol>

    <div class="card mb-4">
       <div class="card-header">
            <i class="fas fa-table me-1"></i>Regstro de Proveedor
        </div>
        <div class="card-body">


            <form action="proveedor_registrar.php" method="post">

                <div class="row g-3">
                  
                  <div class="col-md-5">
                    <input type="text" name="nom" class="form-control" placeholder="Nombres" aria-label="Nombres" required="required">
                  </div>

                   <div class="col-md-2">
                    <input type="text" name="ruc" class="form-control" placeholder="RUC" aria-label="RUC" required="required">
                  </div>

                  <div class="col-md-2">
                    <input type="text" name="cel" class="form-control" placeholder="Celular" aria-label="Celular" required="required">
                  </div>

                  <div class="col-md-4">
                    <input type="text" name="email" class="form-control" placeholder="Email" aria-label="Email" required="required">
                  </div>

                  <div class="col-md-6">
                    <input type="text" name="dir" class="form-control" placeholder="Dirección" aria-label="Dirección" required="required">
                  </div>

                  <div class="col-md-12">
                    <button type="submit" name="registrar" class="btn btn-primary">Registrar</button>
                  </div>

                </div>

            </form>

    


        </div>
    </div>  
</div>      