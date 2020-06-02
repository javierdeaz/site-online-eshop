<?php
session_start();

require_once __DIR__ . "/../controller/MDB/mdbUsuario.php";

require_once __DIR__ . "/../controller/ACTIONS/act_travelproduc.php";

if (!isset($_SESSION['ID_USUARIO'])) {
    header("Location: /");
    exit();
}

$nombre_usuario = $_SESSION['NOMBRE_USUARIO'];

?>
<!DOCTYPE html>
<html lang="zxx">
  <head>
    <!-- Meta Tag -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="copyright" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <!-- Title Tag  -->
    <title>Eshop - Bienvenido</title>
    <!-- Favicon -->
    <link
      rel="icon"
      type="image/png"
      href="static/static_template/images/favicon.png"
    />
    <!-- Web Font -->
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
      rel="stylesheet"
    />

    <!-- StyleSheet -->

    <!-- Bootstrap -->
    <link rel="stylesheet" href="static/static_template/css/bootstrap.css" />
    <!-- Magnific Popup -->
    <link
      rel="stylesheet"
      href="static/static_template/css/magnific-popup.min.css"
    />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="static/static_template/css/font-awesome.css" />
    <!-- Fancybox -->
    <link
      rel="stylesheet"
      href="static/static_template/css/jquery.fancybox.min.css"
    />
    <!-- Themify Icons -->
    <link
      rel="stylesheet"
      href="static/static_template/css/themify-icons.css"
    />
    <!-- Jquery Ui -->
    <link rel="stylesheet" href="static/static_template/css/jquery-ui.css" />
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="static/static_template/css/niceselect.css" />
    <!-- Animate CSS -->
    <link rel="stylesheet" href="static/static_template/css/animate.css" />
    <!-- Flex Slider CSS -->
    <link
      rel="stylesheet"
      href="static/static_template/css/flex-slider.min.css"
    />
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="static/static_template/css/owl-carousel.css" />
    <!-- Slicknav -->
    <link rel="stylesheet" href="static/static_template/css/slicknav.min.css" />

    <!-- Eshop StyleSheet -->
    <link rel="stylesheet" href="static/static_template/css/reset.css" />
    <link rel="stylesheet" href="static/static_template/css/style.css" />
    <link rel="stylesheet" href="static/static_template/css/responsive.css" />

    <!-- Función para cerrar sesión automáticamente -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/auto_logout.js"></script>

  </head>
  <body class="js">
    <!-- Preloader -->
    <div class="preloader">
      <div class="preloader-inner">
        <div class="preloader-icon">
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- End Preloader -->

    <!-- Header -->
    <header class="header shop">
      <!-- Topbar -->
      <div class="topbar">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-12 col-12">
              <!-- Top Left -->
              <div class="top-left">
                <ul class="list-main">
                  <li><i class="ti-headphone-alt"></i> +57 (300) 454-9596</li>
                  <li><i class="ti-email"></i> support@eshop.com</li>
                </ul>
              </div>
              <!--/ End Top Left -->
            </div>
            <div class="col-lg-8 col-md-12 col-12">
              <!-- Top Right -->
              <div class="right-content">
                <ul class="list-main">

                  <li><i class="ti-user"></i> <a href="#"><?php echo ($nombre_usuario); ?></a></li>
                  <li>
                    <i class="ti-power-off"></i><a href="../controller/ACTIONS/act_logout.php">Cerrar sesión</a>
                  </li>
                </ul>
              </div>
              <!-- End Top Right -->
            </div>
          </div>
        </div>
      </div>
      <!-- End Topbar -->
      <div class="middle-inner">
        <div class="container">
          <div class="row">
            <div class="col-lg-2 col-md-2 col-12">
              <!-- Logo -->
              <div class="logo">
                <a href="index.html"
                  ><img src="static/static_template/images/logo.png" alt="logo"
                /></a>
              </div>
              <!--/ End Logo -->
              <!-- Search Form -->
              <div class="search-top">
                <div class="top-search">
                  <a href="#0"><i class="ti-search"></i></a>
                </div>
                <!-- Search Form -->
                <div class="search-top">
                  <form class="search-form">
                    <input
                      type="text"
                      placeholder="Search here..."
                      name="search"
                    />
                    <button value="search" type="submit">
                      <i class="ti-search"></i>
                    </button>
                  </form>
                </div>
                <!--/ End Search Form -->
              </div>
              <!--/ End Search Form -->
              <div class="mobile-nav"></div>
            </div>
            <div class="col-lg-8 col-md-7 col-12">
              <div class="search-bar-top">
                <div class="search-bar">

                  <form>
                    <input
                      name="search"
                      placeholder="Busca tu producto..."
                      type="search"
                    />
                    <button class="btnn"><i class="ti-search"></i></button>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-lg-2 col-md-3 col-12">
              <div class="right-bar">
                <!-- Search Form -->

                  <!-- Shopping Item -->

                  <!--/ End Shopping Item -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Header Inner -->
      <div class="header-inner">
        <div class="container">
          <div class="cat-nav-head">
            <div class="row">
              <div class="col-12">
                <div class="menu-area">
                  <!-- Main Menu -->
                  <nav class="navbar navbar-expand-lg">
                    <div class="navbar-collapse">
                      <div class="nav-inner">
                        <ul class="nav main-menu menu navbar-nav">
                          <li class="active"><a href="#">Inicio</a></li>
                          <li><a href="#">Productos <span class="new">New</span> </a></li>

                          <li><a href="#">Servicios</a></li>

                          <li><a href="contact.html">Contactanos</a></li>
                        </ul>
                      </div>
                    </div>
                  </nav>
                  <!--/ End Main Menu -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/ End Header Inner -->
    </header>
    <!--/ End Header -->

    <!-- Breadcrumbs -->

    <!-- End Breadcrumbs -->

    <!-- Product Style -->
    <section class="product-area shop-sidebar shop section">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-4 col-12">
            <div class="shop-sidebar">
              <!-- Single Widget -->
              <div class="single-widget category">
                <h3 class="title">Categorias</h3>
                <ul class="categor-list">
                  <li><a href="shop-grid-categoria.php?id_cat=2">Hombre</a></li>
                  <li><a href="shop-grid-categoria.php?id_cat=1">Mujer</a></li>
                  <li><a href="shop-grid-categoria.php?id_cat=4">Niños</a></li>
                  <li><a href="shop-grid-categoria.php?id_cat=3">Niñas</a></li>
                </ul>
              </div>
              <!--/ End Single Widget -->
              <!-- Shop By Price -->

              <!--/ End Shop By Price -->
              <!-- Single Widget -->

              <!--/ End Single Widget -->
              <!-- Single Widget -->

              <!--/ End Single Widget -->
            </div>
          </div>
          <div class="col-lg-9 col-md-8 col-12">
            <div class="row">
              <div class="col-12">
                <!-- Shop Top -->

                <!--/ End Shop Top -->
              </div>
            </div>
            <div class="row">








            <?php
for ($j = 0; $j < sizeof($productos_activos); $j++) {
    $producto = $productos_activos[$j];

    ?>
                      <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                        <div class="single-product">
                          <div class="product-img">
                            <a href="product-details.html">
                              <img
                                class="default-img"
                                src="img/<?php echo $producto->getImagen(); ?>.jpg"
                                alt="imagen no enontrada"
                              />
                              <img
                                class="hover-img"
                                src="img/<?php echo $producto->getImagen(); ?>.jpg"
                                alt="imagen no enontrada"
                              />
                            </a>

                          </div>
                          <div class="product-content">

                            <h4>
                            <?php echo $producto->getNombre_producto(); ?>
                            </h4>

                            <div class="product-price">
                              <span><?php echo $producto->getDescription(); ?></span>
                            </div>
                            <div class="product-price">
                              <span>$<?php echo $producto->getPrecio(); ?>.00</span>
                            </div>
                          </div>
                        </div>
                      </div>

                      <?php }?>







            </div>
          </div>
        </div>
      </div>
    </section>
    <!--/ End Product Style 1  -->

    <!-- Start Shop Newsletter  -->

              <!-- End Newsletter Inner -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Shop Newsletter -->

    <!-- Modal -->

    <!-- Modal end -->

        <!-- Start Shop Services Area -->
        <section class="shop-services section home">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-12">
            <!-- Start Single Service -->
            <div class="single-service">
              <i class="ti-rocket"></i>
              <h4>Envío gratis</h4>
              <p>Órdenes sobre $100</p>
            </div>
            <!-- End Single Service -->
          </div>
          <div class="col-lg-3 col-md-6 col-12">
            <!-- Start Single Service -->
            <div class="single-service">
              <i class="ti-reload"></i>
              <h4>Devolución gratuita</h4>
              <p>Dentro de 30 días del envio</p>
            </div>
            <!-- End Single Service -->
          </div>
          <div class="col-lg-3 col-md-6 col-12">
            <!-- Start Single Service -->
            <div class="single-service">
              <i class="ti-lock"></i>
              <h4>Pago seguro</h4>
              <p>100% pago seguro</p>
            </div>
            <!-- End Single Service -->
          </div>
          <div class="col-lg-3 col-md-6 col-12">
            <!-- Start Single Service -->
            <div class="single-service">
              <i class="ti-tag"></i>
              <h4>Mejor precio</h4>
              <p>Precio garantizado</p>
            </div>
            <!-- End Single Service -->
          </div>
        </div>
      </div>
    </section>
    <!-- End Shop Services Area -->

    <!-- Start Footer Area -->
    <footer class="footer">
      <!-- Footer Top -->
      <div class="footer-top section">
        <div class="container">
          <div class="row">
            <div class="col-lg-5 col-md-6 col-12">
              <!-- Single Widget -->
              <div class="single-footer about">
                <div class="logo">
                  <a href="index.html"
                    ><img src="static/static_template/images/logo2.png" alt="#"
                  /></a>
                </div>
                <p class="text">

                </p>
                <p class="call">
                ¿Tienes una pregunta? Llámenos 24/7<span
                    ><a href="#">+5555 555 555</a></span
                  >
                </p>
              </div>
              <!-- End Single Widget -->
            </div>
            <div class="col-lg-2 col-md-6 col-12">
              <!-- Single Widget -->
              <div class="single-footer links">
                <h4>Información</h4>
                <ul>
                  <li><a href="#">Sobre nosotras</a></li>

                </ul>
              </div>
              <!-- End Single Widget -->
            </div>
            <div class="col-lg-2 col-md-6 col-12">
              <!-- Single Widget -->
              <div class="single-footer links">
                <h4>Servicio al Cliente</h4>
                <ul>
                  <li><a href="#">Métodos de pago</a></li>
                  <li><a href="#">Devolución de dinero</a></li>
                  <li><a href="#">Devoluciones</a></li>
                  <li><a href="#">Envíos</a></li>
                  <li><a href="#">Política de privacidad</a></li>
                </ul>
              </div>
              <!-- End Single Widget -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
              <!-- Single Widget -->
              <div class="single-footer social">
                <h4>Contactos</h4>
                <!-- Single Widget -->
                <div class="contact">
                  <ul>
                    <li>Santa Marta.</li>
                    <li>Colombia.</li>
                    <li>info@eshop.com</li>
                    <li>+5555 555 555</li>
                  </ul>
                </div>
                <!-- End Single Widget -->
                <ul>
                  <li>
                    <a href="#"><i class="ti-facebook"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="ti-twitter"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="ti-flickr"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="ti-instagram"></i></a>
                  </li>
                </ul>
              </div>
              <!-- End Single Widget -->
            </div>
          </div>
        </div>
      </div>
      <!-- End Footer Top -->
      <div class="copyright">
        <div class="container">
          <div class="inner">
            <div class="row">
              <div class="col-lg-6 col-12">
                <div class="left">
                  <p>
                    Copyright © 2020

                    - All Rights Reserved.
                  </p>
                </div>
              </div>
              <div class="col-lg-6 col-12">
                <div class="right">
                  <img src="static/static_template/images/payments.png" alt="#" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- /End Footer Area -->

    <!-- Jquery -->
    <script src="static/static_template/js/jquery.min.js"></script>
    <script src="static/static_template/js/jquery-migrate-3.0.0.js"></script>
    <script src="static/static_template/js/jquery-ui.min.js"></script>
    <!-- Popper JS -->
    <script src="static/static_template/js/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="static/static_template/js/bootstrap.min.js"></script>
    <!-- Color JS -->
    <script src="static/static_template/js/colors.js"></script>
    <!-- Slicknav JS -->
    <script src="static/static_template/js/slicknav.min.js"></script>
    <!-- Owl Carousel JS -->
    <script src="static/static_template/js/owl-carousel.js"></script>
    <!-- Magnific Popup JS -->
    <script src="static/static_template/js/magnific-popup.js"></script>
    <!-- Fancybox JS -->
    <script src="static/static_template/js/facnybox.min.js"></script>
    <!-- Waypoints JS -->
    <script src="static/static_template/js/waypoints.min.js"></script>
    <!-- Countdown JS -->
    <script src="static/static_template/js/finalcountdown.min.js"></script>
    <!-- Nice Select JS -->
    <script src="static/static_template/js/nicesellect.js"></script>
    <!-- Ytplayer JS -->
    <script src="static/static_template/js/ytplayer.min.js"></script>
    <!-- Flex Slider JS -->
    <script src="static/static_template/js/flex-slider.js"></script>
    <!-- ScrollUp JS -->
    <script src="static/static_template/js/scrollup.js"></script>
    <!-- Onepage Nav JS -->
    <script src="static/static_template/js/onepage-nav.min.js"></script>
    <!-- Easing JS -->
    <script src="static/static_template/js/easing.js"></script>
    <!-- Active JS -->
    <script src="static/static_template/js/active.js"></script>
  </body>
</html>
