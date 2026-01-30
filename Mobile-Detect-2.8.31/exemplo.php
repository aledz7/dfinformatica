<?php
include "Mobile-Detect-2.8.31/Mobile_Detect.php";
$verifica_celular = new Mobile_Detect;

/// Não é celular.
if(!$verifica_celular->isMobile()) { }
