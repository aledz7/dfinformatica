<?php
if (!isset($current_page)) $current_page = '';
$is_onepage = isset($is_onepage) ? $is_onepage : false;
$contact_link = $is_onepage ? '#contact' : 'index.php#contact';
$about_link = $is_onepage ? '#about' : 'index.php#about';
$project_link = $is_onepage ? '#project' : 'index.php#project';
?>
<body class="home-one">
  <div class="page-wrapper">
    <header class="main-header header-two">
      <div class="header-upper">
        <div class="container clearfix">
          <div class="header-inner rel d-flex align-items-center">
            <div class="logo-outer">
              <div class="logo"><a href="index.php"><picture><source srcset="assets/images/logos/logo1-sem-fundo2-263w.webp 263w, assets/images/logos/logo1-sem-fundo2-526w.png 526w" type="image/webp"><img src="assets/images/logos/logo1-sem-fundo2-526w.png"
                    srcset="assets/images/logos/logo1-sem-fundo2-263w.png 263w, assets/images/logos/logo1-sem-fundo2-526w.png 526w"
                    sizes="(max-width: 768px) 263px, 200px"
                    width="200" height="44"
                    style="width: 200px; background: #fff; border-radius: 10px; padding: 5px"
                    alt="DF Informática - Software Sob Medida" title="DF Informática Desenvolvimento de Software"></picture></a>
              </div>
            </div>
            <div class="nav-outer clearfix">
              <nav class="main-menu navbar-expand-lg">
                <div class="navbar-header">
                  <div class="mobile-logo my-15"> <a href="index.php"> <picture><source srcset="assets/images/logos/logo1-sem-fundo2-263w.webp" type="image/webp"><img src="assets/images/logos/logo1-sem-fundo2-263w.png"
                    width="263" height="57"
                        alt="DF Informática Desenvolvimento de Software" title="DF Informática"></picture></a> </div>
                  <button type="button" class="navbar-toggle" id="botao_celular" data-bs-toggle="collapse"
                    data-bs-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span>
                    <span class="icon-bar"></span> </button>
                </div>
                <div class="navbar-collapse collapse clearfix">
                  <ul class="navigation clearfix">
                    <li><a href="index.php" <?php if ($current_page == 'home') echo 'class="active"'; ?>>Home</a></li>
                    <li><a href="<?php echo $about_link; ?>" <?php if ($current_page == 'about') echo 'class="active"'; ?>>Sobre Nós</a></li>
                    <li><a href="<?php echo $project_link; ?>" <?php if ($current_page == 'project') echo 'class="active"'; ?>>Projetos</a></li>
                    <li class="dropdown">
                      <a href="#">Serviços</a>
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
                    <li><a href="https://api.whatsapp.com/send?phone=<?php echo $whatsapp; ?>&text=Gostaria%20de%20saber%20mais%20informações%20sobre%20desenvolvimento%20de%20sistemas" target="_blank">Preços</a></li>
                    <li><a href="<?php echo $contact_link; ?>" <?php if ($current_page == 'contact') echo 'class="active"'; ?>>Contato</a></li>
                  </ul>
                </div>
              </nav>
            </div>
            <div class="menu-btns">
              <a href="orcamento-desenvolvimento-software.php" class="theme-btn style-three" title="Solicitar orçamento para desenvolvimento de software">Faça seu Orçamento <i class="fas fa-angle-double-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </header>
