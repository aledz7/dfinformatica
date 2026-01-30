<?php
if (!isset($page_title)) $page_title = 'Desenvolvimento de Software Sob Medida | DF Informática';
if (!isset($page_description)) $page_description = 'Empresa desenvolvedora de software sob medida em Brasília DF. Criação de sistemas personalizados, software à medida e sob encomenda.';
if (!isset($page_canonical)) $page_canonical = $site_url . $_SERVER['REQUEST_URI'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8" />
  <meta name="description" content="<?php echo htmlspecialchars($page_description); ?>" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="canonical" href="<?php echo htmlspecialchars($page_canonical); ?>" />
  <title><?php echo htmlspecialchars($page_title); ?></title>
  <!-- Open Graph -->
  <meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>" />
  <meta property="og:description" content="<?php echo htmlspecialchars($page_description); ?>" />
  <meta property="og:url" content="<?php echo htmlspecialchars($page_canonical); ?>" />
  <meta property="og:image" content="<?php echo htmlspecialchars($page_image); ?>" />
  <meta property="og:type" content="<?php echo htmlspecialchars($page_type); ?>" />
  <meta property="og:locale" content="pt_BR" />
  <meta property="og:site_name" content="DF Informática" />
  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="<?php echo htmlspecialchars($page_title); ?>" />
  <meta name="twitter:description" content="<?php echo htmlspecialchars($page_description); ?>" />
  <meta name="twitter:image" content="<?php echo htmlspecialchars($page_image); ?>" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
  <link rel="preconnect" href="https://www.google.com">
  <link rel="preconnect" href="https://www.gstatic.com" crossorigin>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <!-- Critical CSS inline - first paint sem bloqueio -->
  <style>*{margin:0;padding:0;border:none;outline:none;box-shadow:none}body{color:#696e7b;background:#fff;font-weight:400;line-height:32px;font-size:16px;font-family:system-ui,-apple-system,"Segoe UI",Roboto,sans-serif}a{color:#696e7b;cursor:pointer;outline:none;transition:.5s;text-decoration:none}a:hover{color:#0066ff}ul,li{list-style:none;padding:0;margin:0}img{max-width:100%;display:inline-block}.container{max-width:1200px;margin:0 auto;padding:0 15px}.d-flex{display:flex}.align-items-center{align-items:center}.main-header{position:relative;left:0;top:0;z-index:999;width:100%}.main-header.header-two{position:absolute}.main-header .header-upper{z-index:5;width:100%;position:relative}.main-header .logo{z-index:9;padding:2px 0;position:relative;margin-right:25px}.main-slider-area{display:flex;overflow:hidden;min-height:870px;padding-top:110px;padding-bottom:110px;flex-direction:column;justify-content:center;contain:layout}.bgc-black-with-lighting{background:#1e1e22;position:relative}.slider-content{z-index:2;max-width:700px;margin-top:-7px;position:relative;padding-top:165px;padding-bottom:165px}.slider-content .sub-title{color:#fff;font-size:18px;font-weight:500;margin-bottom:15px;display:inline-block}.slider-content h1,.slider-content h2{color:#fff;font-size:85px;line-height:1.1;margin-bottom:30px;letter-spacing:-3px}.slider-btns{margin-left:-5px;margin-right:-5px;min-height:50px}.theme-btn{display:inline-block;font-size:16px;font-weight:600;color:#fff;background:#69d4b6;padding:13px 32px;border-radius:5px;transition:.5s}.theme-btn.style-three{background:transparent;border:2px solid #69d4b6;color:#fff}@media(max-width:991px){.main-header .logo-outer{display:none}.slider-content{padding-top:80px}.slider-content h1,.slider-content h2{font-size:45px}}@media(max-width:575px){.slider-content{padding-top:55px}.slider-content h1,.slider-content h2{font-size:35px}}</style>
  <!-- CSS principal com defer via JS (evita bloqueio pelo Cloudflare) -->
  <link rel="preload" href="assets/css/bootstrap.min.css" as="style">
  <link rel="preload" href="assets/css/style.css" as="style">
  <script>
  (function(){var l=['assets/css/bootstrap.min.css','assets/css/style.css','assets/css/fontawesome-5.14.0.min.css','assets/css/flaticon.min.css','assets/css/animate.min.css'];function a(){l.forEach(function(h){var k=document.createElement('link');k.rel='stylesheet';k.href=h;document.head.appendChild(k);})}if(document.readyState==='loading'){document.addEventListener('DOMContentLoaded',a)}else{a()}})();
  </script>
  <noscript><link rel="stylesheet" href="assets/css/bootstrap.min.css"><link rel="stylesheet" href="assets/css/style.css"><link rel="stylesheet" href="assets/css/fontawesome-5.14.0.min.css"><link rel="stylesheet" href="assets/css/flaticon.min.css"><link rel="stylesheet" href="assets/css/animate.min.css"></noscript>
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "LocalBusiness",
    "name": "DF Informática - Desenvolvimento de Software Sob Medida",
    "url": "https://www.dfinformatica.com.br",
    "description": "Empresa desenvolvedora de software sob medida em Brasília DF. Criação de sistemas personalizados, software à medida e sob encomenda para empresas.",
    "logo": "https://www.dfinformatica.com.br/assets/images/logos/logo1-sem%20fundo2.png",
    "image": "https://www.dfinformatica.com.br/assets/images/logos/logo1-sem%20fundo2.png",
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "Brasília",
      "addressRegion": "DF"
    },
    "contactPoint": {
      "@type": "ContactPoint",
      "telephone": "+5561998524612",
      "contactType": "Customer Service",
      "areaServed": "BR"
    }
  }
  </script>
  <?php if (!empty($page_breadcrumb_name)): ?>
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
      {
        "@type": "ListItem",
        "position": 1,
        "name": "Home",
        "item": "<?php echo $site_url; ?>/"
      },
      {
        "@type": "ListItem",
        "position": 2,
        "name": "<?php echo htmlspecialchars($page_breadcrumb_name); ?>",
        "item": "<?php echo htmlspecialchars($page_canonical); ?>"
      }
    ]
  }
  </script>
  <?php endif; ?>
  <script async src="https://www.googletagmanager.com/gtag/js?id=AW-11391837984"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'AW-11391837984');
  </script>
  <?php if (!empty($is_home)) { include __DIR__ . '/head-home-extra.php'; } ?>
</head>
