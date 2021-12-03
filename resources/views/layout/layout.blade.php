<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>ChainLight Technology</title>
    <meta content="Empresa do ramo da tecnologia, desenvolvimento e segurança" name="descriptison">
    <meta content="site, desenvolvimento, portal, segurança, camera, cftv, desing, painel, solar, energia" name="keywords">
    <meta content="ChainLight" name="Author">


    <link rel="icon" href="{{ URL::asset('img/favicon.ico') }}" type="image/x-icon"/>

    <!-- Google Fonts -->

    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900"
        rel="stylesheet">

    <!-- Vendor CSS Files -->

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">


    <!-- =======================================================
  * Template Name: Mamba - v2.0.1
  * Template URL: https://bootstrapmade.com/mamba-one-page-bootstrap-template-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

<!-- ======= Top Bar ======= -->
<section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-start">
        <i class="icofont-envelope"></i><a href="mailto:contato@chainlight.com.br">contato@chainlight.com.br</a>
        <i class="icofont-phone"></i><a href="https://wa.me/message/62SGEBEXJV2WL1">+55 (22) 99943-5421</a>
      </div>
      <div class="social-links float-end">
        <a href="mailto:contato@chainlight.com.br" class="twitter"><i class="icofont-email"></i></a>
        <a href="https://www.facebook.com/ChainLighttec/" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="https://www.instagram.com/chainlight_/" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="https://wa.me/message/62SGEBEXJV2WL1" class="skype"><i class="icofont-whatsapp"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <div class="logo float-start">
        <a href="index.html"><img src="{{ asset('img/logotext.png') }}" alt="" class="img-fluid mt-1"></a>

      </div>

      <nav class="nav-menu float-end d-none d-lg-block">
        <ul>
          <li class="active"><a href="#header">Inicio</a></li>
          <li><a href="#about">Sobre</a></li>
          <li><a href="#services">Serviços</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
         <!-- <li><a href="#team">Equipe</a></li>
          <li class="drop-down"><a href="">Financiamento</a>
            <ul>
              <li class="drop-down"><a href="financiamento.html">Painel Solar</a>
                <ul>
                  <li><a href="financiamento.html">BV Financeira</a></li>
                  <li><a href="financiamento.html">Banco do Brasil</a></li>
                </ul>
              </li>
            </ul>
          </li>-->
          <li><a href="#contact">Contato</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url('{{ asset('img/slide/DESENVOLVIMENTO.png') }}');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animated fadeInDown">Desenvolvimento Web</h2>
              <!--  <p class="animated fadeInUp">Sistemas melhoram, aceleram e viabilizam, aumentando a produtividade e lucratividade.</p>
              <a href="#about" class="btn-get-started animated fadeInUp scrollto">Ver Mais</a> -->
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url('{{ asset('img/slide/SOLAR.png') }}');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animated fadeInDown">Energias renováveis</h2>
              <!--  <p class="animated fadeInUp">Economia, sutentabilidade e rentabilidade.</p>
                <a href="#about" class="btn-get-started animated fadeInUp scrollto">Ver Mais</a> -->
              </div>
            </div>
          </div>


          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url('{{ asset('img/slide/MONITORAMENTO.png') }}');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animated fadeInDown">Sitemas de Segurança</h2>
              <!--  <p class="animated fadeInUp">Sistema de segurança consiste no uso de um ou vários dispositivos de segurança que ajudam a preservar a segurança de um estabelecimento ou domicílio contra possíveis riscos.</p>
                <a href="#about" class="btn-get-started animated fadeInUp scrollto">Ver Mais</a> -->
              </div>
            </div>
          </div>

          <!-- Slide 4 -->
          <div class="carousel-item" style="background-image: url('{{ asset('img/slide/portal.png') }}">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animated fadeInDown">Portal</h2>
              <!--  <p class="animated fadeInUp">Portal institucionais para prefeituras e instititucionais.</p>
                <a href="#about" class="btn-get-started animated fadeInUp scrollto">Ver Mais</a> -->
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon icofont-rounded-left" aria-hidden="true"></span>
          <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon icofont-rounded-right" aria-hidden="true"></span>
          <span class="sr-only">Próximo</span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->


    @yield('content')

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <a href="index.html"><img src="assets/img/logo-branca.png" alt="" class="img-fluid mb-4" style="width: 80%"></a>
            <p>
             Arraial do Cabo <br>
             Rio de Janeiro, Brasil<br><br>
              <strong>Telefone:</strong> +55 (22) 99943-5421<br>
              <strong>Email:</strong> contato@chainlight.com.br<br>
            </p>
            <div class="social-links mt-3">
            <!--  <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a> -->
              <a href="https://www.facebook.com/ChainLighttec/" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="https://www.instagram.com/chainlight_/" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="https://wa.me/message/62SGEBEXJV2WL1" class="google-plus"><i class="bx bxl-whatsapp"></i></a>
              <a href="mailto:contato@chainlight.com.br" class="twitter"><i class="icofont-email"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Link uteis</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#header">Inicio</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">Sobre</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Serviços</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Serviços</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Desenvolvimento Web</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Sistema de Segurança</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Rede de computadores</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Se inscreva</h4>
            <p>Inscreva-se para receber novidades da ChainLight</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Inscrever">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>CHAINLIGHT</span></strong>. Todos direitos reservados
      </div>
      <div class="credits">
        Design por <a href="https://www.chainlight.com.br/">ChainLight</a>
      </div>
    </div>
  </footer><!-- End Footer -->

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<!-- Template -->

<script src="{{ mix('js/app.js')}}"></script>

</body>
</html>
