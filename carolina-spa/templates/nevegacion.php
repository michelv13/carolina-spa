<div class="navegacion mt-3 py-2">
      <nav class="nav-principal navbar navbar-expand-md navbar-light bg-faded">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav_principal" aria-label="mostrar navegacion">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a href="" class="navbar-brand d-lg-none">CAROLINA SPA</a>
        <div class="container">
          <div class="collapse navbar-collapse w-100" id="nav_principal">
              <ul class="nav nav-justified flex-column w-100 flex-sm-row">
                <?php
                  $archivo = basename ($_SERVER['PHP_SELF']);
                  $pagina = str_replace('.php','', $archivo);
                ?>
                  <li class="nav-item <?php echo 'index' === $pagina ? 'active' : '' ?>">
                    <a href="index.php" class="nav-link">
                      INICIO
                    </a>
                  </li>
                  <li class="nav-item <?php echo 'nosotros' === $pagina ? 'active' : '' ?>">
                    <a href="nosotros.php" class="nav-link">
                      NOSOTROS
                    </a>
                  </li>
                  <li class="nav-item <?php echo 'servicios' === $pagina ? 'active' : '' ?>">
                    <a href="servicios.php" class="nav-link">
                      SERVICIOS
                    </a>
                  </li>
                  <li class="nav-item <?php echo 'productos' === $pagina ? 'active' : '' ?>">
                    <a href="productos.php" class="nav-link">
                      PRODUCTOS
                    </a>
                  </li>
                  <li class="nav-item <?php echo 'contacto' === $pagina ? 'active' : '' ?>">
                    <a href="contacto.php" class="nav-link">
                      CONTACTOS
                    </a>
                  </li>
                </ul>
          </div> <!--collapse-->
        </div><!--container-->
      </nav>
    </div><!--navegacion-->