<?php
  include 'templates/header.php';
  include 'templates/nevegacion.php';
  include 'inc/funciones.php';
?>

    <div class="container pt-4">
      <div class="row no-gutters">
        <div class="col-12 hero">
          <img src="img/productos.jpg" class="img-fluid" alt="">
          <h2 class="text-uppercase d-none d-md-block py-3 px-5">
            Productos
          </h2>
        </div>
      </div>
    </div>

    <div class="container pt-4 productos">
      <div class="row">
        <main class="col-lg-12 contenido-principal">
          <h2 class="d-block d-md-none text-uppercase text-center">
            Productos
          </h2>
          <div class="row">
            <div class="card-columns">

            <?php 

              $productos = obtenerproductos();

              while($producto = $productos->fetch_assoc()){
            ?>
            <div class="card">
              <a href="productoo.php?id=1">
                <img src="img/<?php echo $producto['imagen_mini']; ?>" class="card-img-top img-fluid" alt="">
                <div class="card-body">
                  <h3 class="card-tittle text-center text-uppercase">
                  <?php echo $producto['nombre']; ?>
                  </h3>
                  <p class="card-text textuppercase">
                  <?php echo $producto['descripcion_corta']; ?>
                  </p>
                  <p class="precio lead text-cente mb-0">
                  <?php echo $producto['precio']; ?>
                  </p>
                </div><!--card-body-->
              </a>
            </div><!--card-->
          <?php } ?>
          </div><!--card columns-->
          </div><!---row--->
        </main>

      </div>
    </div>
  <?php
  include 'templates/footer.php';
?>
    

