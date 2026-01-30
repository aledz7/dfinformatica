<?php
if (!defined('DF_CONFIG_LOADED')) {
    define('DF_CONFIG_LOADED', true);
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    include __DIR__ . "/../funcoes.php";
    include __DIR__ . "/../Mobile-Detect-2.8.31/Mobile_Detect.php";
    $verifica_celular = new Mobile_Detect;
    $whatsapp = '556198524612';
    $site_url = 'https://www.dfinformatica.com.br';
    $og_image = $site_url . '/assets/images/logos/logo1-sem%20fundo2.png';
    if (!isset($page_image)) $page_image = $og_image;
    if (!isset($page_type)) $page_type = 'website';
}
?>
