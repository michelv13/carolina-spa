<?php
  include 'templates/header.php';
  include 'templates/nevegacion.php';
?>
    <div class="container pt-4">
      <div class="row no-gutters">
        <div class="col-12 hero">
          <img src="img/servicios.jpg" class="img-fluid" alt="">
          <h2 class="text-uppercase d-none d-md-block py-3 px-5">
            Servicios
          </h2>
        </div>
      </div>
    </div>

    <div class="container pt-4">
      <div class="row">
        <main class="col-lg-8 contenido-principal">
          <h2 class="d-block d-md-none text-uppercase text-center">
            servicios
          </h2>

          <div id="servicios">
            <div class="card">
              <div class="card-header" id="servicio1">
                <h2 class="mb-0">
                  <button class="btn btn-link" data-toggle="collapse" data-target="#descripcion1" aria-expanded="true" aria-controls="#descripcion1">
                    servicio 1
                  </button>
                </h2>
              </div><!--card-header-->
              <div id="descripcion1" class="collapse show" aria-labelledby="servicio1" data-parent="servicios">
                <div class="card-body">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit dicta sit fugiat ea odit iusto sed ducimus deleniti obcaecati harum! Adipisci voluptatum quo, fugiat sapiente! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat, dolorem.

                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, nam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia accusamus vel aliquid totam, unde nemo, minus commodi minima aspernatur ut? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, velit.
                </div>
              </div>   
            </div><!--card-->

            <div class="card">
              <div class="card-header" id="servicio2">
                <h2 class="mb-0">
                  <button class="btn btn-link" data-toggle="collapse" data-target="#descripcion2" aria-expanded="false" aria-controls="#descripcion2">
                    servicio 2
                  </button>
                </h2>
              </div><!--card-header-->
              <div id="descripcion2" class="collapse" aria-labelledby="servicio2" data-parent="servicios">
                <div class="card-body">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit dicta sit fugiat ea odit iusto sed ducimus deleniti obcaecati harum! Adipisci voluptatum quo, fugiat sapiente! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci animi repellat deleniti accusantium ex. Autem!
                </div>
              </div>   
            </div><!--card-->

            <div class="card">
              <div class="card-header" id="servicio3">
                <h2 class="mb-0">
                  <button class="btn btn-link" data-toggle="collapse" data-target="#descripcion3" aria-expanded="false" aria-controls="#descripcion3">
                    servicio 3
                  </button>
                </h2>
              </div><!--card-header-->
              <div id="descripcion3" class="collapse" aria-labelledby="servicio3" data-parent="servicios">
                <div class="card-body">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit dicta sit fugiat ea odit iusto sed ducimus deleniti obcaecati harum! Adipisci voluptatum quo, fugiat sapiente! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, quis.
                </div>
              </div>   
            </div><!--card-->
          </div> <!--servicios-->


        </main>

        <aside class="col-lg-4 pt-4 pt-lg-0">
          <div class="sidebar p-3">
            <h2 class="text-center text-uppercase mt-4">Nuevos clientes</h2>
            <p class="lead text-center mt-4">Recibe 20% de descuento con este cupon.</p>

            <div class="cupon px-2 py-5 mt-5">
              <p class="text-uppercase text-center mb-0">
                <span class="display-4">20% de descuento</span>
                <br>
                EN TODOS LOS SERVICIOS.
              </p>
            </div><!--CUPON-->

          </div><!--SIDEBAR-->
        </aside>
      </div>
    </div>

<?php
  include 'inc/citas.php';
  include 'templates/footer.php';
?>
