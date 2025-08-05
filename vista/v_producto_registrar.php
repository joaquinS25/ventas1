<div class="container-fluid px-4">
    <h1 class="mt-4">Productos</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active">Productos</li>
    </ol>

    <div class="card mb-4">
       <div class="card-header">
            <i class="fas fa-table me-1"></i>Regstro de Producto
        </div>
        <div class="card-body">


            <form action="producto_registrar.php" method="post">

                <div class="row g-3">
                  
                  <div class="col-md-5">
                    <input type="text" name="nom_producto" class="form-control" placeholder="Nombres" aria-label="Nombres" required="required">
                  </div>

                   <div class="col-md-2">
                    <input type="text" name="prec_producto" class="form-control" placeholder="Precio Compra" aria-label="Precio Compra" required="required">
                  </div>

                  <div class="col-md-2">
                    <input type="text" name="prev_producto" class="form-control" placeholder="Precio Venta" aria-label="Precio Venta" required="required">
                  </div>

                  <div class="col-md-4">
                    <input type="text" name="desc_producto" class="form-control" placeholder="Descripcion" aria-label="Descripcion" required="required">
                  </div>

                  <div class="col-md-12">
                    <button type="submit" name="registrar" class="btn btn-primary">Registrar</button>
                  </div>

                </div>

            </form>

    


        </div>
    </div>  
</div>      