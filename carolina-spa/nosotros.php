<?php
  include 'templates/header.php';
  include 'templates/nevegacion.php';
?>

    <div class="container pt-4">
      <div class="row no-gutters">
        <div class="col-12 hero">
          <img src="img/nosotros.jpg" class="img-fluid" alt="">
          <h2 class="text-uppercase d-none d-md-block py-3 px-5">
            Nosotros
          </h2>
        </div>
      </div>
    </div>

    <div class="container pt-4">
      <div class="row">
        <main class="col-lg-8 contenido-principal">
          <h2 class="d-block d-md-none text-uppercase text-center">
            Nosotros
          </h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam autem, accusantium tempora inventore dignissimos delectus recusandae voluptas vel deleniti mollitia ratione ex, quo corrupti minima consequatur numquam natus quasi veniam reiciendis veritatis quaerat nesciunt similique laborum? Dolor culpa autem magnam praesentium, placeat labore sint eius excepturi aliquam non ducimus officia magni tempore. Nam aspernatur deserunt, est debitis ad repellendus dolorem.
          </p>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam autem, accusantium tempora inventore dignissimos delectus recusandae voluptas vel deleniti mollitia ratione ex, quo corrupti minima consequatur numquam natus quasi veniam reiciendis veritatis quaerat nesciunt similique laborum? Dolor culpa autem magnam praesentium, placeat labore sint eius excepturi aliquam non ducimus officia magni tempore. Nam aspernatur deserunt, est debitis ad repellendus dolorem. Provident nobis temporibus harum perferendis consequatur fugit tempore debitis veniam nemo, minus aut cupiditate, quod ipsum voluptas neque vero corporis?
          </p>

           <h1 class="text-center text-uppercase mt-4 encabezado">
              <span class="text-lowercase d-block">
                Conoce nuestras
              </span>instalaciones
          </h1>


          <div class="imagenes pt-4">
            <a href="#" data-target="#imagen_1" data-toggle="modal">
              <img src="img/galeria_mini_01.jpg" alt="">
            </a>
            <a href="#" data-target="#imagen_2" data-toggle="modal">
              <img src="img/galeria_mini_02.jpg" alt="">
            </a>
            <a href="#" data-target="#imagen_3" data-toggle="modal">
              <img src="img/galeria_mini_03.jpg" alt="">
            </a>

            <div class="modal fade" id="imagen_1" tabindex:"-1" role:"dialog" aria-labelledby="imagen 1" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-body">
                    <img src="img/galeria_g_01.jpg" class="img-fluid" alt="">
                  </div><!--modalbody-->
                </div><!--modal-content-->
              </div><!--modal-dialog-->
            </div><!--modal 1-->

            <div class="modal fade" id="imagen_2" tabindex:"-1" role:"dialog" aria-labelledby="imagen 2" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-body">
                    <img src="img/galeria_grande_02.jpg" class="img-fluid" alt="">
                  </div><!--modalbody-->
                </div><!--modal-content-->
              </div><!--modal-dialog-->
            </div><!--modal 1-->

             <div class="modal fade" id="imagen_3" tabindex:"-1" role:"dialog" aria-labelledby="imagen 3" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-body">
                    <img src="img/galeria_grande_03.jpg" class="img-fluid" alt="">
                  </div><!--modalbody-->
                </div><!--modal-content-->
              </div><!--modal-dialog-->
            </div><!--modal 1-->

          </div><!--imagenes-->
        </main>

        <aside class="col-lg-4 pt-4 pt-lg-0 align-self-start">
          <div class="sidebar horario">
            <h2 class="text-uppercase text-center mt-5">Horarios</h2>
            <p class="text-center mt-3 lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, perferendis non doloremque at ab voluptas odit minima nostrum nihil officiis earum, laudantium beatae possimus et.</p>
            <table class="table table-hover text-center mt-3">
                      <thead>
                          <tr>
                              <th class="text-center">Día</th>
                              <th class="text-center">De</th>
                              <th class="text-center">Hasta</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                             <td>Lunes</td>
                              <td>09:00</td>
                              <td>19:00</td>
                          </tr>
                          <tr>
                              <td>Martes</td>
                              <td>09:00</td>
                              <td>19:00</td>
                          </tr>
                          <tr>
                              <td>Miércoles</td>
                              <td>09:00</td>
                              <td>19:00</td>
                          </tr>
                          <tr>
                              <td>Jueves</td>
                              <td>09:00</td>
                              <td>19:00</td>
                          </tr>
                          <tr>
                              <td>Viernes</td>
                              <td>09:00</td>
                              <td>19:00</td>
                          </tr>
                          <tr>
                              <td>Sábado</td>
                              <td>10:00</td>
                              <td>14:00</td>
                          </tr>
                          <tr>
                              <td>Domingo</td>
                              <td>Cerrado</td>
                              <td>Cerrado</td>
                          </tr>
                      </tbody>
                 </table>
          </div>
        </aside>
      </div>
    </div>
    <?php
  include 'templates/footer.php';
?>
    

