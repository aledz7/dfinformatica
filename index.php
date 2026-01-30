<?php
include 'includes/config.php';
$page_title = 'Desenvolvimento de Software Sob Medida em Brasília DF | DF Informática';
$page_description = 'Desenvolvimento de software sob medida em Brasília DF. Empresa desenvolvedora de software, criação de sistemas personalizados e software à medida. Software sob encomenda para empresas.';
$page_canonical = $site_url . '/';
$is_home = true;
include 'includes/head.php';
?>
<body class="home-one">
  <div class="page-wrapper">

    <!-- main header -->
    <header class="main-header header-two">
      <!--Header-Upper-->
      <div class="header-upper">
        <div class="container clearfix">
          <div class="header-inner rel d-flex align-items-center">
            <div class="logo-outer">
              <div class="logo"><a href="."><img src="assets/images/logos/logo1-sem fundo2.png"
                    style="width: 200px; background: #fff; border-radius: 10px; padding: 5px"
                    alt="DF Informática Criação de Sistemas Sob-Medida" title="DF Informática Marketing Digital"></a>
              </div>
            </div>
            <div class="nav-outer clearfix">
              <!-- Main Menu -->
              <nav class="main-menu navbar-expand-lg">
                <div class="navbar-header">
                  <div class="mobile-logo my-15"> <a href="."> <img src="assets/images/logos/logo1-sem fundo.png"
                        alt="DF Informática Desenvolvimento de Sistemas"
                        title="DF Informática Desenvolvimento de Sistemas"> </a> </div>

                  <!-- Toggle Button -->
                  <button type="button" class="navbar-toggle" id="botao_celular" data-bs-toggle="collapse"
                    data-bs-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span>
                    <span class="icon-bar"></span> </button>
                </div>
                <div class="navbar-collapse collapse clearfix">
                  <ul class="navigation onepage clearfix">
                    <li><a href="#home" onClick="document.getElementById('botao_celular').click();">Home</a></li>
                    <li><a href="#about" onClick="document.getElementById('botao_celular').click();"
                        title="Tudo sobre marketing digital é com a DF Informática">Sobre Nós</a></li>
                    <li><a href="#project" onClick="document.getElementById('botao_celular').click();"
                        title="Projetos de desenvolvimento de sistemas">Projetos</a></li>
                    <li class="dropdown"><a href="#">Serviços</a>
                      <ul>
                        <li><a href="software-sob-medida.php">Software Sob Medida</a></li>
                        <li><a href="sistemas-sob-medida.php">Sistemas Personalizados</a></li>
                        <li><a href="criacao-software.php">Criação de Software</a></li>
                        <li><a href="criacao-sistemas-web.php">Criação de Sistemas Web</a></li>
                        <li><a href="desenvolvedor-sistemas.php">Desenvolvedor de Sistemas</a></li>
                        <li><a href="quanto-custa-desenvolver-software.php">Quanto Custa</a></li>
                        <li><a href="orcamento-desenvolvimento-software.php">Orçamento</a></li>
                      </ul>
                    </li>
                    <li><a href="https://api.whatsapp.com/send?phone=<?php echo $whatsapp; ?>&text=Gostaria%20de%20saber%20mais%20informações%20sobre%20desenvolvimento%20de%20sistemas"
                        target="_blank" rel="noopener noreferrer" title="Consultar preços via WhatsApp">Preços</a></li>
                    <li><a href="#contact" onClick="document.getElementById('botao_celular').click();"
                        title="Desenvolva seu sistema com a DF Informática">Contato</a></li>
                  </ul>
                </div>
              </nav>
              <!-- Main Menu End-->
            </div>

            <!-- Menu Button -->
            <div class="menu-btns"> <a href="#contact" class="theme-btn style-three"
                title="Faça um orçamento pra criação do seu sistema">Faça seu Orçamento <i
                  class="fas fa-angle-double-right"></i></a>

              <!-- menu sidbar -->
              <div class="menu-sidebar">
                <button> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--End Header Upper-->
    </header>
    <style>
      /*Cookie Consent Begin*/

      #cookieConsent {

        background-color: rgba(20, 20, 20, 0.8);

        min-height: 26px;

        font-size: 14px;

        color: #ccc;

        line-height: 26px;

        padding: 8px 0 8px 30px;

        font-family: "Trebuchet MS", Helvetica, sans-serif;

        position: fixed;

        bottom: 0;

        max-width: 400px;
        bottom: 80px;
        left: 10px;


        display: none;

        z-index: 9999;

      }

      @media screen and (min-width: 0px) and (max-width: 600px) {
        #cookieConsent {
          display: none !important;
        }
      }

      #cookieConsent a {

        color: #4B8EE7;

        text-decoration: none;

      }

      #closeCookieConsent {

        float: right;

        display: inline-block;

        cursor: pointer;

        height: 20px;

        width: 20px;

        margin: -15px 0 0 0;

        font-weight: bold;

      }

      #closeCookieConsent:hover {

        color: #FFF;

      }

      #cookieConsent a.cookieConsentOK {

        background-color: #F1D600;

        color: #000;

        display: inline-block;

        border-radius: 5px;

        padding: 0 20px;

        cursor: pointer;

        float: right;

        margin: 0 60px 0 10px;

      }

      #cookieConsent a.cookieConsentOK:hover {

        background-color: #E0C91F;

      }

      /*Cookie Consent End*/
    </style>
    <div id="cookieConsent">
      <div id="closeCookieConsent">x</div>
      Nosso site usa cookies e outros serviços para melhorar sua experiência de compra. Ao continuar navegando nele,
      entendemos que está ciente e de acordo com seu uso e com nossas Políticas de Privacidade. <a
        class="cookieConsentOK" href="javascript:;">Aceito.</a>
    </div>

    <!--Form Back Drop-->
    <div class="form-back-drop"></div>

    <!-- Hidden Sidebar -->
    <section class="hidden-bar">
      <div class="inner-box text-center">
        <div class="cross-icon"><span class="fa fa-times"></span></div>
        <div class="title">
          <h4>Obtenha Apoio</h4>
        </div>

        <!--Appointment Form-->
        <div class="appointment-form">
          <form method="post" action="envia.php">
            <div class="form-group">
              <input type="text" name="name" id="name" placeholder="Nome" required>
            </div>
            <div class="form-group">
              <input type="email" name="email" id="email" placeholder="Email" required>
            </div>
            <div class="form-group">
              <textarea placeholder="Mensagem" id="mensagem" name="mensagem" rows="5"></textarea>
            </div>
            <div class="form-group">
              <div class="g-recaptcha" data-sitekey="6LfxqgkpAAAAAH17ZlK42C6_7Ol2YJjP0V-nAL1f"></div>
              <button type="submit" class="theme-btn" style="margin-top: 15px;;">Enviar</button>
            </div>
          </form>
        </div>

        <!--Social Icons-->
        <div class="social-style-one"> <a href="https://www.facebook.com/dfinformatica.com.br" target="_blank"><i
              class="fab fa-facebook-f"></i></a> <a
            href="https://api.whatsapp.com/send?phone=<?php echo $whatsapp; ?>&text=Gostaria de saber mais informações sobre desenvolvimento de sistemas"
            target="_blank"><i class="fab fa-whatsapp"></i></a> <a
            href="https://www.instagram.com/dfinformatica.oficial/" target="_blank"><i class="fab fa-instagram"></i></a>
          <a href="tel:06141036708"><i class="fab fa-whatsapp"></i></a> </div>
      </div>
    </section>


    <!-- Slider Section Start -->
    <section id="home" class="main-slider-area bgc-black-with-lighting rel z-1" <?php if ($verifica_celular->isMobile()) { ?> style="min-height: 0px; padding-top: 30px; padding-bottom: 0px;" <?php } ?>>
      <div class="main-slider-active">
        <div class="slider-item">
          <div class="container">
            <div class="slider-content"> <span class="sub-title">Mais de 15 anos de experiência em criação de sistemas e
                aplicativos</span>
              <h1>Desenvolvimentos de sistemas e aplicativos personalizados</h1>
              <div class="slider-btns"> <a href="#contact" class="theme-btn"
                  title="Entre em contato e desenvolva seu sistema com nossa empresa">Orçamento<i
                    class="fas fa-angle-double-right"></i></a> <a href="#project" class="theme-btn style-three"
                  title="Alguns trabalhos realizados por nossa Agência">Trabalhos Feitos <i
                    class="fas fa-angle-double-right"></i></a> </div>
            </div>
          </div>
          <?php
          if (!$verifica_celular->isMobile()) {
            ?>
            <div class="slider-video" style="background-image: url(assets/images/slider/slide1.jpg); ">
              <!--<a href="https://www.youtube.com/watch?v=9Y7ma241N8k" class="mfp-iframe video-play"><i class="fas fa-play"></i></a> pra colocar o vídeo-->

              <span class="video-title cd-headline clip"> <span class="cd-words-wrapper"> <b class="is-visible">Web
                    Design</b> <b>Desenvolvimento</b> </span> </span>
            </div>
          <?php } ?>
        </div>
        <div class="slider-item">
          <div class="container">
            <div class="slider-content"> <span class="sub-title">Criação de Sistemas e Aplicativos</span>
              <h2 class="h1">Criação de Sistemas e App Sob-medida</h2>
              <div class="slider-btns"> <a href="#contact" class="theme-btn"
                  title="Orçamento para desenvolvimento de sistemas sob medida">Orçamento<i
                    class="fas fa-angle-double-right"></i></a> <a href="#project"
                  title="Trabalho de desenvolvimento de sistemas" class="theme-btn style-three">Trabalhos Feitos <i
                    class="fas fa-angle-double-right"></i></a> </div>
            </div>
          </div>
          <?php
          if (!$verifica_celular->isMobile()) {
            ?>
            <div class="slider-video" style="background-image: url(assets/images/slider/slide2.jpg); ">
              <!-- <a href="https://www.youtube.com/watch?v=9Y7ma241N8k" class="mfp-iframe video-play"><i class="fas fa-play"></i></a>-->
              <!--
                        <span class="video-title cd-headline clip">
                            <span class="cd-words-wrapper">
                                <b class="is-visible">Web Design</b>
                                <b>Desenvolvimento</b>
                            </span>
                        </span>
-->
            </div>
          <?php } ?>
        </div>
        <div class="slider-item">
          <div class="container">
            <div class="slider-content"> <span class="sub-title">Desenvolvimento de sistemas e aplicativos sob
                medida</span>
              <h2 class="h1">Monte, Escolha e Aprimore seu sistema ou aplicativo</h2>
              <div class="slider-btns"> <a href="#contact" class="theme-btn"
                  title="Desenvolvimento de sistemas em Brasilia">Orçamento<i class="fas fa-angle-double-right"></i></a>
                <a href="#project" class="theme-btn style-three" title="Sistemas desenvolvidos em Brasília DF">Trabalhos
                  Feitos <i class="fas fa-angle-double-right"></i></a> </div>
            </div>
          </div>
          <?php
          if (!$verifica_celular->isMobile()) {
            ?>
            <div class="slider-video" style="background-image: url(assets/images/slider/slide1.jpg); ">
              <!-- <a href="https://www.youtube.com/watch?v=9Y7ma241N8k" class="mfp-iframe video-play"><i class="fas fa-play"></i></a>-->
              <!--
                        <span class="video-title cd-headline clip">
                            <span class="cd-words-wrapper">
                                <b class="is-visible">Web Design</b>
                                <b>Desenvolvimento</b>
                            </span>
                        </span>
-->
            </div>
          <?Php } ?>
        </div>
      </div>
      <div class="container">
        <div class="main-slider-dots"></div>
      </div>
      <div class="slider-shapes"> <img class="shape dots one lazyload" data-src="assets/images/shapes/slider-dots.png"
          alt="Criação de Sistemas Brasilia"> <img class="shape dots two lazyload"
          data-src="assets/images/shapes/slider-dots.png" alt="Criação de Sistemas sob medida"> <img
          class="shape wave-line lazyload" data-src="assets/images/shapes/slider-wave-line.png"
          alt="Criação de sistemas df"> <img class="shape circle lazyload"
          data-src="assets/images/shapes/slider-circle.png" alt="criação de sistemas no DF"> </div>
    </section>
    <!-- Slider Section End -->

    <!-- Core Feature start -->
    <section class="feature-area-five bgc-lighter pt-100 pb-70">
      <div class="container">
        <div class="section-title text-center mb-60 wow fadeInUp delay-0-2s"> <span class="sub-title mb-10">Identidade
            Visual</span>
          <h2>Recursos incríveis</h2>
        </div>
        <div class="row row-cols-xl-6 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1 justify-content-center">
          <!--
        <div class="col wow fadeInUp delay-0-2s">
          <div class="feature-item-five"> <i class="flaticon-responsive"></i>
            <h5>Design 100% Mobile</h5>
          </div>
        </div>
-->
          <div class="col wow fadeInUp delay-0-3s">
            <div class="feature-item-five"> <i class="flaticon-feature"></i>
              <h5>Personalização Poderosa</h5>
            </div>
          </div>
          <!--
        <div class="col wow fadeInUp delay-0-4s">
          <div class="feature-item-five"> <i class="flaticon-aim"></i>
            <h5>Animações legais e modernas</h5>
          </div>
        </div>
-->
          <div class="col wow fadeInUp delay-0-5s">
            <div class="feature-item-five"> <i class="flaticon-seo"></i>
              <h5>Estratégia e Usabilidade</h5>
            </div>
          </div>
          <div class="col wow fadeInUp delay-0-6s">
            <div class="feature-item-five"> <i class="flaticon-search-location"></i>
              <h5>Melhor Suporte Técnico</h5>
            </div>
          </div>
          <div class="col wow fadeInUp delay-0-7s">
            <div class="feature-item-five"> <i class="flaticon-settings"></i>
              <h5>Automação de Processos</h5>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Core Feature end -->

    <!-- About Us Area start -->
    <section id="about" class="about-area-one pt-130 pb-125 rel z-1">
      <div class="container">
        <div class="row justify-content-between align-items-center">
          <div class="col-lg-5">
            <div class="about-image-one bg-squire-shape rmb-85 wow fadeInUp delay-0-2s"> <img class="lazyload"
                data-src="assets/images/about/about-one.jpg" alt="Saiba mais sobre nossa agência de marketing DF"> <img
                class="image-left lazyload" data-src="assets/images/shapes/image-left.png"
                alt="Agência de Marketing Web DF"> </div>
          </div>
          <div class="col-xl-6 col-lg-7">
            <div class="about-content-one wow fadeInUp delay-0-4s">
              <div class="section-title mb-45"> <span class="sub-title mb-15">Sobre Nós</span>
                <h2>Conheça Mais</h2>
              </div>
              <ul class="list-style-one">
                <li>
                  <div class="content">
                    <h4>Transparência Total</h4>
                    <p>Acompanhe o progresso do seu projeto em tempo real.</p>
                  </div>
                </li>
                <li>
                  <div class="content">
                    <h4>Aprovação de Etapas</h4>
                    <p>Aprove ou sugira mudanças diretamente no sistema, simplificando o processo.</p>
                  </div>
                </li>
                <li>
                  <div class="content">
                    <h4>Gestão de múltiplos projetos</h4>
                    <p>Desenvolvimento e criação de sistemas de forma única, dando um toque de exclusividade que só nós
                      da Agencia Group tem. Marketing digital eficaz e com resposta rápida, atendendo suas necessidades
                      ligeiramente.</p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- About Us Area end -->

    <?php
    if (!$verifica_celular->isMobile()) {
      ?>
      <!-- Statistics Three Area start -->
      <section class="statistics-area-three bgs-cover pb-100 rel z-1">
        <div class="container">
          <div class="row justify-content-between align-items-center">
            <div class="col-lg-7">
              <div class="statistics-three-content rmb-65 wow fadeInRight delay-0-2s">
                <div class="row justify-content-center justify-content-xl-start">
                  <div class="col-xl-9">
                    <div class="section-title mb-60"> <span class="sub-title mb-15">Estatísticas da Empresa</span>
                      <h2>Temos algumas conquistas de parceiros globais</h2>
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                    <div class="counter-item style-two counter-text-wrap wow fadeInRight delay-0-3s"> <i
                        class="flaticon-startup"></i> <span class="count-text" data-speed="3000" data-stop="800">0</span>
                      <span class="counter-title">Projetos concluídos</span>
                      <!--<p>On the other denonce with righteous indin</p>-->
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                    <div class="counter-item style-two counter-text-wrap wow fadeInRight delay-0-5s"> <i
                        class="flaticon-global"></i> <span class="count-text" data-speed="3000" data-stop="100">0</span>
                      <span class="counter-title">Sistemas desenvolvidos</span>
                      <!--                                        <p>On the other denonce with righteous indin</p>-->
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                    <div class="counter-item style-two counter-text-wrap wow fadeInRight delay-0-7s"> <i
                        class="flaticon-rating"></i> <span class="count-text" data-speed="3000" data-stop="15">0</span>
                      <span class="counter-title">Anos de experiência</span>
                      <!--                                        <p>On the other denonce with righteous indin</p>-->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-5">
              <div class="statistics-three-image bg-squire-shape mb-30 wow fadeInLeft delay-0-3s"> <img class="lazyload"
                  data-src="assets/images/about/statictics.jpg"
                  alt="Conheça mais sobre desenvolvimento de sistemas e marketing"> <img class="image-right lazyload"
                  data-src="assets/images/shapes/image-right.png" alt="Desenvolvimento de e-commerce"> </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Statistics Three Area end -->
    <?Php } ?>

    <!-- Design Featured Start -->
    <section id="featured"
      class="design-feature-area overflow-hidden pt-130 pb-100 text-white bgc-black-with-lighting rel z-1">
      <div class="container">
        <div class="section-title text-center mb-60 wow fadeInUp delay-0-2s"> <span class="sub-title mb-10">Um sistema
            ou app profissional e sob-medida!</span>
          <h2>O que fornecemos para seu o sistema ou app:</h2>
        </div>
        <div class="row no-gap align-items-center">
          <div class="col-lg-3">
            <div class="feature-left">
              <div class="row">
                <div class="col-lg-12 col-sm-6">
                  <div class="service-item style-three wow fadeInRight delay-0-2s">
                    <div class="icon"><i class="flaticon-design"></i></div>
                    <div class="content">
                      <h4>Firewall e Criptografia SSL</h4>
                      <i class="fal fa-long-arrow-right"></i>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12 col-sm-6">
                  <div class="service-item style-three wow fadeInRight delay-0-3s">
                    <div class="icon"><i class="flaticon-web-page"></i></div>
                    <div class="content">
                      <h4>Automação</h4>
                      <i class="fal fa-long-arrow-right"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="feature-middle rmt-30">
              <div class="image wow fadeInUp delay-0-2s">
                <!--                                <img class="circle-text" src="assets/images/shapes/feature-image-top.png" alt="Text">-->
                <img class="round lazyload" data-src="assets/images/features/feature-middle.png"
                  alt="Construção de sistemas">
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="service-item style-three wow fadeInUp delay-0-3s">
                    <div class="icon"><i class="flaticon-online"></i></div>
                    <div class="content">
                      <h4>Relatórios Gerenciais</h4>
                      <i class="fal fa-long-arrow-right"></i>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="service-item style-three mt-30 wow fadeInUp delay-0-4s">
                    <div class="icon"><i class="flaticon-web-programming"></i></div>
                    <div class="content">
                      <h4>Do seu jeio. Você define como será seu sistema</h4>
                      <i class="fal fa-long-arrow-right"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="feature-right">
              <div class="row">
                <div class="col-lg-12 col-sm-6">
                  <div class="service-item style-three mt-100 wow fadeInLeft delay-0-2s">
                    <div class="icon"><i class="flaticon-graphic-design"></i></div>
                    <div class="content">
                      <h4>Experiência do usuário e design</h4>
                      <i class="fal fa-long-arrow-right"></i>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12 col-sm-6">
                  <div class="service-item style-three wow fadeInLeft delay-0-3s">
                    <div class="icon"><i class="flaticon-user-experience"></i></div>
                    <div class="content">
                      <h4>Emissão de NFE, NFSe, NFCe, Cte e MDFe</h4>
                      <i class="fal fa-long-arrow-right"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="design-feature-shapes"> <img class="shape dots lazyload"
          data-src="assets/images/shapes/slider-dots.png" alt="Contratar web design"> <img
          class="shape wave-line lazyload" data-src="assets/images/shapes/feature-wave-line.png"
          alt="Construir software"> </div>
    </section>
    <!-- Design Featured End -->

    <!-- Project Area start -->
    <section id="project" class="project-area-three py-130 rel z-1">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg10">
            <div class="section-title text-center mb-50 wow fadeInUp delay-0-2s"> <span class="sub-title mb-15">Nossos
                Trabalhos</span>
              <h2>Clientes que confiam no nosso trabalho</h2>
            </div>
          </div>
        </div>
      </div>
      <div class="project-three-active">
        <div class="project-item style-two wow fadeInUp delay-0-2s">
          <div class="project-iamge"> <img class="lazyload" data-src="portfolio/atlas-colchoes.png"
              alt="Desenvolvimento do sistema Minha Nossa"></img>
            <div class="project-over"> <a class="details-btn" target="_blank"><i class="far fa-arrow-right"></i></a>
            </div>
          </div>
          <div class="project-content">
            <h4><a target="_blank">Atlas Colchões</a></h4>
            <span class="category">Sistema</span>
          </div>
        </div>
        <div class="project-item style-two wow fadeInUp delay-0-4s">
          <div class="project-iamge"> <img class="lazyload" data-src="portfolio/britanica-turismo.png"
              alt="Desenvolvimento do sistema Capital Vans"></img>
            <div class="project-over"> <a class="details-btn" target="_blank"><i class="far fa-arrow-right"></i></a>
            </div>
          </div>
          <div class="project-content">
            <h4><a target="_blank">Britânica Turismo</a></h4>
            <span class="category">Sistema</span>
          </div>
        </div>
        <div class="project-item style-two wow fadeInUp delay-0-6s">
          <div class="project-iamge"> <img class="lazyload" data-src="portfolio/otc-doc.png"
              alt="Desenvolvimento do sistema Frozen Fit"></img>
            <div class="project-over"> <a class="details-btn" target="_blank"><i class="far fa-arrow-right"></i></a>
            </div>
          </div>
          <div class="project-content">
            <h4><a target="_blank">OTC DOC</a></h4>
            <span class="category">Sistema</span>
          </div>
        </div>
        <div class="project-item style-two wow fadeInUp delay-0-8s">
          <div class="project-iamge"> <img class="lazyload" data-src="portfolio/methodos.png" alt="Project">
            <div class="project-over"> <a class="details-btn"><i class="far fa-arrow-right"></i></a> </div>
          </div>
          <div class="project-content">
            <h4><a>Clínica Methodos</a></h4>
            <span class="category">Sistema</span>
          </div>
        </div>
        <div class="project-item style-two wow fadeInUp delay-0-8s">
          <div class="project-iamge"> <img class="lazyload" data-src="portfolio/reidoscapachos.png" alt="Project">
            <div class="project-over"> <a class="details-btn"><i class="far fa-arrow-right"></i></a> </div>
          </div>
          <div class="project-content">
            <h4><a>Rei dos Capachos</a></h4>
            <span class="category">Sistema</span>
          </div>
        </div>
      </div>
    </section>



    <!-- Project Area end -->

    <!-- Working Process Area start -->
    <section class="work-process-area pb-95 rel z-1">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-10">
            <div class="section-title text-center mb-55 wow fadeInUp delay-0-2s"> <span class="sub-title mb-15">Processo
                de trabalho</span>
              <h2>Como funciona</h2>
            </div>
          </div>
        </div>
        <div class="work-process-wrap rel z-1">
          <div class="row justify-content-between">
            <div class="col-xl-3 col-lg-5 col-sm-6">
              <div class="work-process-item mt-30 wow fadeInUp delay-0-2s">
                <div class="icon"> <span class="number">01</span> <i class="flaticon-optimization"></i> </div>
                <h4>Coleta de informações</h4>
                <p>Coletamos suas informações e ideias.</p>
              </div>
            </div>
            <div class="col-xl-3 col-lg-5 col-sm-6">
              <div class="work-process-item wow fadeInUp delay-0-4s">
                <div class="icon"> <span class="number">02</span> <i class="flaticon-link"></i> </div>
                <h4>Planejamento de ideias</h4>
                <p>Construção prévia das telas do sistema.</p>
              </div>
            </div>
            <div class="col-xl-3 col-lg-5 col-sm-6">
              <div class="work-process-item mt-55 wow fadeInUp delay-0-6s">
                <div class="icon"> <span class="number">03</span> <i class="flaticon-data"></i> </div>
                <h4>Análise de projeto</h4>
                <p>Análise para alterações e aprovação do layout.</p>
              </div>
            </div>
            <div class="col-xl-3 col-lg-5 col-sm-6">
              <div class="work-process-item mt-45 wow fadeInUp delay-0-8s">
                <div class="icon"> <span class="number">04</span> <i class="flaticon-star"></i> </div>
                <h4>Teste & Lançamento</h4>
                <p>Teste de todas funcionalidades, caso ok. Lançamento do sistema.</p>
              </div>
            </div>
          </div>
          <div class="work-process-shape"> <img class="lazyload" data-src="assets/images/shapes/worp-process-step.png"
              alt="Criação de sistemas e app sob-medida"> </div>
        </div>
      </div>
    </section>
    <!-- Working Process Area end -->

    <!-- CTA Area start -->
    <section class="call-to-action-area rel z-2">
      <div class="container">
        <div class="cta-inner bgs-cover" style="background-image: url(assets/images/background/cta-bg.jpg);">
          <div class="row">
            <div class="col-xl-6">
              <div class="cta-item wow fadeInLeft delay-0-2s">
                <div class="icon"><i class="flaticon-target"></i></div>
                <h4>Tem algum projeto em mente?</h4>
                <a href="#contact" class="details-btn"><i class="far fa-arrow-right"></i></a>
              </div>
            </div>
            <div class="col-xl-6">
              <div class="cta-item wow fadeInRight delay-0-2s">
                <div class="icon"><i class="flaticon-target"></i></div>
                <h4>Precisa de Gestão para a sua empresa?</h4>
                <a href="#contact" class="details-btn" title="Gestão para a sua empresa."><i
                    class="far fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- CTA Area end -->



    <!-- Contact Area Start -->
    <section id="contact" class="contact-area overflow-hidden py-130 bgc-black-with-lighting rel z-1">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-xl-5 col-lg-6">
            <form class="contact-area-form text-center wow fadeInRight delay-0-2s" name="contact-area-form"
              action="envia2.php" method="post">
              <h4>Nós entramos em contato</h4>
              <input type="text" id="name" name="name" class="form-control" value="" placeholder="Nome Completo"
                required="">
              <input type="email" id="email" name="email" class="form-control" value="" placeholder="E-mail"
                required="">
              <input type="text" id="contato" name="contato" class="form-control" value="" placeholder="WhatsApp"
                maxlength="15" required=""
                title="Se estiver fora do Brasil, por favor, inclua o código do país (DDI) ao informar o número de telefone completo.">

              <!--                            <textarea name="mensagem" id="mensagem" class="form-control" rows="5" placeholder="Mensagem" required=""></textarea>-->

              <div class="g-recaptcha" data-sitekey="6Lf6mgopAAAAALtFTd-w5gAvJqfxI-ed3853fvkc"></div>
              <button type="submit" class="theme-btn" style="margin-top: 20px;">Enviar <i
                  class="fas fa-angle-double-right"></i></button>
            </form>
          </div>
          <div class="col-xl-5 col-lg-6">
            <div class="contact-info-area text-white rmb-75 wow fadeInLeft delay-0-2s">
              <div class="section-title mb-55">
                <h2>Agora seu sistema será profissional e sob-medida para a sua empresa, entre em contato <span>agora
                    mesmo</span></h2>
              </div>
              <div class="contact-info-wrap">
                <div class="contact-info-item">
                  <div class="icon"> <i class="fal fa-map-marker-alt"></i> </div>
                  <div class="content"> <span class="title">Localização</span> <b class="text">Brasília - DF</b> </div>
                </div>
                <div class="contact-info-item">
                  <div class="icon"> <i class="far fa-envelope-open-text"></i> </div>
                  <div class="content"> <span class="title">E-mail</span> <b class="text"><a
                        href="mailto:info@dfinformatica.com.br">info@dfinformatica.com.br</a></b> </div>
                </div>
                <div class="contact-info-item">
                  <div class="icon"> <i class="far fa-phone"></i> </div>
                  <div class="content"> <span class="title">Telefone</span> <b class="text"><a
                        href="callto:6141036708">+55 (61) 4103-6708</a></b> </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="contact-shapes"> <img class="shape circle lazyload" data-src="assets/images/shapes/slider-dots.png"
          alt="Criamos Softwares"> <img class="shape dots lazyload" data-src="assets/images/shapes/contact-dots.png"
          alt="Criar sistema comercial"> <img class="shape wave-line lazyload"
          data-src="assets/images/shapes/contact-wave-line.png" alt="Criar sistema de compras"> </div>
    </section>
    <!-- Contact Area End -->

    <!-- Testimonial Area Start -->
    <!--
  <section class="testimonial-area-two rel z-1 mt-130 mb-120" id="depoimentos">
    <div class="container for-middle-border">
      <div class="row justify-content-between align-items-center pb-90 rpb-35 wow fadeInUp delay-0-2s">
        <div class="col-xl-7 col-lg-8">
          <div class="section-title"> <span class="sub-title mb-15">Qual é a opinião dos clientes?</span>
            <h2>Feedback dos clientes</h2>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="slider-arrow-btns text-lg-end">
            <button class="work-prev"><i class="far fa-arrow-left"></i></button>
            <button class="work-next"><i class="far fa-arrow-right"></i></button>
          </div>
        </div>
      </div>
      <div class="testimonial-two-active">
        <div class="testimonial-item-two wow fadeInUp delay-0-2s">
          <div class="testimonial-author"> <img class="lazyload"  data-src="assets/images/feedback/testimonial1.jpg" alt="Sistemas sob medida"> </div>
          <div class="testimonial-content">
            <p>Ótima empresa, resolveram meus problemas e consegui uma grande variedade de clientes</p>
            <div class="author-description"> <span class="h5">Bruno</span> <span class="designation">Atlas Colchões.</span> </div>
          </div>
        </div>
        <div class="testimonial-item-two wow fadeInUp delay-0-4s">
          <div class="testimonial-author"> <img class="lazyload"  data-src="assets/images/feedback/testimonial2.jpg" alt="Criação de sites profissionais"> </div>
          <div class="testimonial-content">
            <p>Como meus serviços necessitam de uma demanda grande de clientela, contratei os serviços da DF Informática e consegui o que eu queria.</p>
            <div class="author-description"> <span class="h5">Vitor</span> <span class="designation">Capital Vans</span> </div>
          </div>
        </div>
        <div class="testimonial-item-two wow fadeInUp delay-0-4s">
          <div class="testimonial-author"> <img class="lazyload"  data-src="assets/images/feedback/testimonial2.jpg" alt="Criador de lojas virtuais"> </div>
          <div class="testimonial-content">
            <p>Me ajudou bastante quando comecei, consegui capatar uma variedade enorme e hoje graças a Deus tenho meus clientes fixos.</p>
            <div class="author-description"> <span class="h5">Ricardo Sousa</span> <span class="designation">Dono de E-commerce</span> </div>
          </div>
        </div>
      </div>
    </div>
  </section>
-->
    <!-- Testimonial Area End -->

    <?php /*?> <!-- Blog Area start -->
<section id="news" class="news-blog-area pt-130 pb-75 rel z-1">
<div class="container">
   <div class="row justify-content-center">
       <div class="col-lg-10">
           <div class="section-title text-center mb-60 wow fadeInUp delay-0-2s"> <span class="sub-title mb-15">Obtenha todas as atualizações</span>
               <h2>Leia as últimas notícias e blog</h2>
           </div>
       </div>
   </div>
   <div class="row large-gap">
       <div class="col-lg-6">
           <div class="blog-item wow fadeInUp delay-0-2s">
               <div class="image"> <img src="assets/images/blog/blog1.jpg" alt="Blog"> </div>
               <div class="content"> <span class="date"><i class="far fa-calendar-alt"></i> 25 Março 2022</span>
                   <h4><a href="#">Maneiras fáceis de incorporar o feedback do cliente</a></h4>
                   <div class="author"> <img src="assets/images/blog/author1.jpg" alt="Author">
                       <div class="post-by"> <span>Postado por</span> <a href="#">Douglas B. Dickens</a> </div>
                   </div>
               </div>
           </div>
       </div>
       <div class="col-lg-6">
           <div class="blog-item wow fadeInUp delay-0-4s">
               <div class="image"> <img src="assets/images/blog/blog2.jpg" alt="Blog"> </div>
               <div class="content"> <span class="date"><i class="far fa-calendar-alt"></i> 27 Março 2022</span>
                   <h4><a href="#">Como criar um site moderno para o seu negócio?</a></h4>
                   <div class="author"> <img src="assets/images/blog/author2.jpg" alt="Author">
                       <div class="post-by"> <span>Postado por</span> <a href="#">Carson C. Rhodes</a> </div>
                   </div>
               </div>
           </div>
       </div>
       <div class="col-lg-6">
           <div class="blog-item wow fadeInUp delay-0-2s">
               <div class="image"> <img src="assets/images/blog/blog3.jpg" alt="Blog"> </div>
               <div class="content"> <span class="date"><i class="far fa-calendar-alt"></i> 25 Março 2022</span>
                   <h4><a href="#">Como trabalhar o marketing digital nas redes sociais?</a></h4>
                   <div class="author"> <img src="assets/images/blog/author3.jpg" alt="Author">
                       <div class="post-by"> <span>Postado por</span> <a href="#">Robert T. Evans</a> </div>
                   </div>
               </div>
           </div>
       </div>
       <div class="col-lg-6">
           <div class="blog-item wow fadeInUp delay-0-4s">
               <div class="image"> <img src="assets/images/blog/blog4.jpg" alt="Blog"> </div>
               <div class="content"> <span class="date"><i class="far fa-calendar-alt"></i> 25 Março 2022</span>
                   <h4><a href="#">Maneiras fáceis de incorporar o feedback do cliente</a></h4>
                   <div class="author"> <img src="assets/images/blog/author4.jpg" alt="Author">
                       <div class="post-by"> <span>Postado por</span> <a href="#">Stanley J. Contreras</a> </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
</div>
</section>
<!-- Blog Area end --> <?php */ ?>

    <!-- footer area start -->
    <footer class="main-footer footer-two pt-80 bgc-lighter">
      <div class="container">
        <div class="row justify-content-xl-between justify-content-center">
          <div class="col-xl-4 col-lg-5 col-md-6">
            <div class="footer-widget widget_about me-md-5 wow fadeInUp delay-0-2s">
              <div class="footer-logo mb-25"> <a href="."><img class="lazyload"
                    data-src="assets/images/logos/logo1-sem fundo2.png" alt="Criar sistema empresarial"></a> </div>
              <p>DF Informática fazendo a diferença na sua vida de empreendedor, mudando estilo e funcionalidade do seu
                sistema para melhor.</p>
              <div class="social-style-two pt-5"> <a href="https://www.facebook.com/dfinformatica.com.br"
                  target="_blank"><i class="fab fa-facebook-f"></i></a> <a
                  href="https://api.whatsapp.com/send?phone=<?php echo $whatsapp; ?>&text=Gostaria de saber mais informações sobre desenvolvimento de sistemas"
                  target="_blank"><i class="fab fa-whatsapp"></i></a> <a
                  href="https://www.instagram.com/dfinformatica.oficial/" target="_blank"><i
                    class="fab fa-instagram"></i></a> <a href="tel:06141036708"><i class="fab fa-whatsapp"></i></a>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-md-6">
            <div class="footer-widget widget_nav_menu wow fadeInUp delay-0-4s">
              <h4 class="footer-title">Links Rápidos</h4>
              <ul class="list-style-two">
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php#about">Sobre Nós</a></li>
                <li><a href="index.php#project">Projetos</a></li>
                <li><a href="software-sob-medida.php">Software Sob Medida</a></li>
                <li><a href="sistemas-sob-medida.php">Sistemas Personalizados</a></li>
                <li><a href="criacao-software.php">Criação de Software</a></li>
                <li><a href="criacao-sistemas-web.php">Criação de Sistemas Web</a></li>
                <li><a href="desenvolvedor-sistemas.php">Desenvolvedor de Sistemas</a></li>
                <li><a href="quanto-custa-desenvolver-software.php">Quanto Custa</a></li>
                <li><a href="orcamento-desenvolvimento-software.php">Orçamento</a></li>
                <li><a href="desenvolvimento-software-brasilia.php">Brasília DF</a></li>
                <li><a
                    href="https://api.whatsapp.com/send?phone=<?php echo $whatsapp; ?>&text=Gostaria%20de%20saber%20mais%20informações%20sobre%20desenvolvimento%20de%20sistemas" target="_blank" rel="noopener noreferrer" title="Consultar preços via WhatsApp">Preços</a>
                </li>
                <li><a href="index.php#contact">Contato</a></li>

                <!--<li><a href="#">Product Engineering</a></li>
                                <li><a href="#">Latest News</a></li>
                                <li><a href="#">Technical Support</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">Landing Pages Design</a></li>-->
              </ul>
            </div>
          </div>
          <div class="col-xl-4 col-lg-6 col-md-8">
            <div class="footer-widget widget_newsletter wow fadeInUp delay-0-6s">
              <h4 class="footer-title">Newsletter</h4>
              <p>Inscreva-se para obter mais atualizações</p>
              <form action="#">
                <input type="email" disabled placeholder="E-mail" required>
                <button class="theme-btn">Inscreva-se agora <i class="fas fa-angle-double-right"></i></button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom mt-30 pt-25 pb-10">
        <div class="container">
          <div class="copyright-text text-center">
            <p>Desenvolvimento de Sites DF © Copyright <?= date('Y'); ?>. Todos Direitos Reservados.</p>
          </div>
        </div>
      </div>
    </footer>
    <!-- footer area end -->

    <style>
      .whatsapp {
        position: fixed;
        bottom: 5px;
        left: 5px;
        padding: 10px;
        z-index: 100000000000000000000;
      }
    </style>
    <div> <a
        href="https://api.whatsapp.com/send?phone=<?php echo $whatsapp; ?>&text=Gostaria de saber mais informações sobre desenvolvimento de sistemas"
        target="_blank"> <img class="whatsapp" src="assets/css/whatsapp.png" alt="Contato WhatsApp - DF Informática" onClick="conversao_google()" /></a>
    </div>

    <!-- Scroll Top Button -->
    <?php /*?><button class="scroll-top scroll-to-target" data-target="html"><span class="fas fa-angle-double-up"></span></button><?php */ ?>
  </div>
  <!--End pagewrapper-->

  <?php
  if (!$verifica_celular->isMobile()) {
    ?>
    <script src="//code.jivosite.com/widget/0jncmsHQPv" async></script>
  <?Php } ?>


  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <!-- Jquery -->
  <script src="assets/js/jquery-3.6.0.min.js"></script>
  <!-- Bootstrap -->
  <script src="assets/js/bootstrap.min.js"></script>
  <!-- Appear Js -->
  <script src="assets/js/appear.min.js"></script>
  <!-- Slick -->
  <script src="assets/js/slick.min.js"></script>
  <!-- Magnific Popup -->
  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <!-- Nice Select -->
  <script src="assets/js/jquery.nice-select.min.js"></script>
  <!-- Image Loader -->
  <script src="assets/js/imagesloaded.pkgd.min.js"></script>
  <!-- Type Writer -->
  <script src="assets/js/jquery.animatedheadline.min.js"></script>
  <!-- Circle Progress -->
  <script src="assets/js/circle-progress.min.js"></script>
  <!-- Isotope -->
  <script src="assets/js/isotope.pkgd.min.js"></script>
  <!--  WOW Animation -->
  <script src="assets/js/wow.min.js"></script>
  <!-- Custom script -->
  <script src="assets/js/script.js"></script>
  <script src="assets/js/lazysizes.min.js" async></script>
  <script>
    $(document).ready(function () {
      setTimeout(function () {
        $("#cookieConsent").fadeIn(200);
      }, 4000);
      $("#closeCookieConsent, .cookieConsentOK").click(function () {
        $("#cookieConsent").fadeOut(200);
      });
    });
  </script>

  <script type="text/javascript">
    function valida() {
      if (grecaptcha.getResponse() == "") {
        alert("captcha errado. Favor tente de novo!");
        return false;
      }
    }
  </script>

  <script>
    function txtBoxFormat(strField, sMask, evtKeyPress) {
      var i, nCount, sValue, fldLen, mskLen, bolMask, sCod, nTecla;

      if (document.all) { // Internet Explorer
        nTecla = evtKeyPress.keyCode;
      } else if (document.layers) { // Nestcape
        nTecla = evtKeyPress.which;
      } else if (document.getElementById) { // FireFox
        nTecla = evtKeyPress.which;
      }

      if (nTecla != 8) {

        sValue = document.getElementById(strField).value;

        // Limpa todos os caracteres de formatação que
        // já estiverem no campo.
        sValue = sValue.toString().replace("-", "");
        sValue = sValue.toString().replace("-", "");
        sValue = sValue.toString().replace(".", "");
        sValue = sValue.toString().replace(".", "");
        sValue = sValue.toString().replace("/", "");
        sValue = sValue.toString().replace("/", "");
        sValue = sValue.toString().replace("(", "");
        sValue = sValue.toString().replace("(", "");
        sValue = sValue.toString().replace(")", "");
        sValue = sValue.toString().replace(")", "");
        sValue = sValue.toString().replace(" ", "");
        sValue = sValue.toString().replace(" ", "");
        sValue = sValue.toString().replace(":", "");
        fldLen = sValue.length;
        mskLen = sMask.length;

        i = 0;
        nCount = 0;
        sCod = "";
        mskLen = fldLen;

        while (i <= mskLen) {
          bolMask = ((sMask.charAt(i) == "-") || (sMask.charAt(i) == ".") || (sMask.charAt(i) == "/"))
          bolMask = bolMask || ((sMask.charAt(i) == "(") || (sMask.charAt(i) == ")") || (sMask.charAt(i) == " "))
          bolMask = bolMask || (sMask.charAt(i) == ":")

          if (bolMask) {
            sCod += sMask.charAt(i);
            mskLen++;
          } else {
            sCod += sValue.charAt(nCount);
            nCount++;
          }

          i++;
        }

        //objForm[strField].value = sCod;
        document.getElementById(strField).value = sCod;

        if (nTecla != 8) { // backspace
          if (sMask.charAt(i - 1) == "9") { // apenas números...
            return ((nTecla > 47) && (nTecla < 58));
          } // números de 0 a 9
          else { // qualquer caracter...
            return true;
          }
        } else {
          return true;
        }
      }
    }
  </script>
</body>

</html>