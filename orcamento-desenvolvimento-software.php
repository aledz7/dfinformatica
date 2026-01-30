<?php
include 'includes/config.php';
$page_title = 'Orçamento para Desenvolvimento de Software | DF Informática';
$page_description = 'Solicite orçamento para desenvolvimento de software. Resposta em 24h, sem compromisso. Empresa desenvolvedora de software em Brasília DF.';
$page_canonical = $site_url . '/orcamento-desenvolvimento-software.php';
$page_breadcrumb_name = 'Orçamento';
include 'includes/head.php';
$current_page = 'services';
include 'includes/header.php';
?>
    <section class="hero-area-three bgc-black-with-lighting pt-210 rpt-150 pb-130 rpb-100 rel z-1">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-8">
            <div class="hero-content-three rmb-55">
              <?php include 'includes/breadcrumb.php'; ?>
              <span class="sub-title mb-20">DF Informática</span>
              <h1>Orçamento para Desenvolvimento de Software</h1>
              <p class="mb-35">Solicite seu <strong>orçamento para desenvolvimento de software</strong> sem compromisso. Nossa equipe analisa seu projeto e retorna em até 24 horas com uma proposta personalizada para seu software sob medida.</p>
              <div class="hero-btns mb-25">
                <a href="#contact" class="theme-btn">Preencher Formulário Abaixo <i class="fas fa-angle-double-right"></i></a>
                <a href="https://api.whatsapp.com/send?phone=<?php echo $whatsapp; ?>&text=Gostaria%20de%20solicitar%20or%C3%A7amento%20para%20desenvolvimento%20de%20software" target="_blank" class="theme-btn style-three">Orçamento via WhatsApp <i class="fas fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="about-area-one pt-130 pb-125 rel z-1">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="section-title mb-45">
              <span class="sub-title mb-15">Solicite sem Compromisso</span>
              <h2>Benefícios de Solicitar Orçamento de Desenvolvimento de Software</h2>
            </div>
            <ul class="list-style-one mb-40">
              <li><strong>Resposta em 24 horas:</strong> Nossa equipe analisa e retorna rapidamente</li>
              <li><strong>Sem compromisso:</strong> A solicitação de orçamento não gera obrigação</li>
              <li><strong>Proposta personalizada:</strong> Analisamos seu projeto e apresentamos escopo e valores</li>
              <li><strong>Atendimento humanizado:</strong> Entendemos suas necessidades antes de propor</li>
            </ul>
            <p>Como <strong>empresa desenvolvedora de software</strong>, temos experiência em diversos tipos de projetos. Seja para <strong>software sob medida</strong>, <strong>sistemas personalizados</strong>, <strong>criação de software</strong> ou <strong>desenvolvimento de software sob medida</strong>, estamos prontos para ajudar. Solicite seu <strong>orçamento para desenvolvimento de software</strong> sem compromisso.</p>
          </div>
        </div>
      </div>
    </section>

<?php include 'includes/contact.php'; ?>
<?php include 'includes/footer.php'; ?>
