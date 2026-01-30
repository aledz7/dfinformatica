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
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/fontawesome-5.14.0.min.css">
  <link rel="stylesheet" href="assets/css/flaticon.min.css">
  <link rel="stylesheet" href="assets/css/animate.min.css">
  <link rel="stylesheet" href="assets/css/slick.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "LocalBusiness",
    "name": "DF Informática",
    "url": "https://www.dfinformatica.com.br",
    "logo": "https://dfinformatica.com.br/assets/images/logos/logo1-sem fundo2.png",
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "Brasília",
      "addressRegion": "DF"
    },
    "contactPoint": {
      "@type": "ContactPoint",
      "telephone": "+5561998524612",
      "contactType": "Customer Service"
    }
  }
  </script>
  <script async src="https://www.googletagmanager.com/gtag/js?id=AW-11391837984"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'AW-11391837984');
  </script>
</head>
