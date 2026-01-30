    <section id="contact" class="contact-area overflow-hidden py-130 bgc-black-with-lighting rel z-1">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-xl-5 col-lg-6">
            <form class="contact-area-form text-center wow fadeInRight delay-0-2s" name="contact-area-form"
              action="envia2.php" method="post">
              <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars(csrf_token()); ?>">
              <h4>Nós entramos em contato</h4>
              <input type="text" id="name" name="name" class="form-control" value="" placeholder="Nome Completo" required="">
              <input type="email" id="email" name="email" class="form-control" value="" placeholder="E-mail" required="">
              <input type="text" id="contato" name="contato" class="form-control" value="" placeholder="WhatsApp"
                maxlength="15" required="" title="Inclua o código do país (DDI) se fora do Brasil">
              <div class="g-recaptcha" data-sitekey="6Lf6mgopAAAAALtFTd-w5gAvJqfxI-ed3853fvkc"></div>
              <button type="submit" class="theme-btn" style="margin-top: 20px;">Enviar <i class="fas fa-angle-double-right"></i></button>
            </form>
          </div>
          <div class="col-xl-5 col-lg-6">
            <div class="contact-info-area text-white rmb-75 wow fadeInLeft delay-0-2s">
              <div class="section-title mb-55">
                <h2>Agora seu sistema será profissional e sob-medida para a sua empresa, entre em contato <span>agora mesmo</span></h2>
              </div>
              <div class="contact-info-wrap">
                <div class="contact-info-item">
                  <div class="icon"> <i class="fal fa-map-marker-alt"></i> </div>
                  <div class="content"> <span class="title">Localização</span> <b class="text">Brasília - DF</b> </div>
                </div>
                <div class="contact-info-item">
                  <div class="icon"> <i class="far fa-envelope-open-text"></i> </div>
                  <div class="content"> <span class="title">E-mail</span> <b class="text"><a href="mailto:info@dfinformatica.com.br">info@dfinformatica.com.br</a></b> </div>
                </div>
                <div class="contact-info-item">
                  <div class="icon"> <i class="far fa-phone"></i> </div>
                  <div class="content"> <span class="title">Telefone</span> <b class="text"><a href="callto:6141036708">+55 (61) 4103-6708</a></b> </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="contact-shapes">
        <img class="shape circle lazyload" data-src="assets/images/shapes/slider-dots.png" alt="Software sob medida">
        <img class="shape dots lazyload" data-src="assets/images/shapes/contact-dots.png" alt="Desenvolvimento de software">
        <img class="shape wave-line lazyload" data-src="assets/images/shapes/contact-wave-line.png" alt="Empresa desenvolvedora de software">
      </div>
    </section>
