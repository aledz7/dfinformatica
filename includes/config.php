<?php
if (!defined('DF_CONFIG_LOADED')) {
    define('DF_CONFIG_LOADED', true);
    include __DIR__ . "/../Mobile-Detect-2.8.31/Mobile_Detect.php";
    $verifica_celular = new Mobile_Detect;
    $whatsapp = '556198524612';
    $site_url = 'https://www.dfinformatica.com.br';
}
?>
