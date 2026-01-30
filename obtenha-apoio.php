<?php
error_reporting(0);
include('includes/config.php');
if (!file_exists(__DIR__ . '/includes/credentials.php')) {
	die('Configure as credenciais: copie includes/credentials.php.example para includes/credentials.php');
}
include('includes/credentials.php');
include('funcoes.php');
require("phpmailer/class.phpmailer.php");
require 'recaptchalib.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
	header('Location: index.php');
	exit;
}
if (!csrf_validate()) {
	echo "<script> alert('Requisição inválida. Por favor, tente novamente.'); history.back();</script>";
	exit;
}

$secret = RECAPTCHA_SECRET_APOIO;
$ip = $_SERVER['REMOTE_ADDR'];
$captcha = isset($_POST['g-recaptcha-response']) ? $_POST['g-recaptcha-response'] : '';

$rsp = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=" . urlencode($secret) . "&response=" . urlencode($captcha) . "&remoteip=" . urlencode($ip));
$arr = json_decode($rsp, TRUE);

if (isset($arr['success']) && $arr['success'] == 1) {
	$mail = new PHPMailer();
	$mensagem = "<b>Contato via site - DF Informática Apoio </b> <br /> <br />";
	$mensagem .= "<b>Nome:</b> " . texto(isset($_POST['name']) ? $_POST['name'] : '') . " <br />";
	$mensagem .= "<b>E-mail:</b> " . texto(isset($_POST['email']) ? $_POST['email'] : '') . " <br />";
	$mensagem .= "<b>Mensagem:</b> " . texto(isset($_POST['mensagem']) ? $_POST['mensagem'] : '') . " <br />";

	$mail->IsSMTP();
	$mail->SMTPDebug = 0;
	$mail->SMTPAuth = true;
	$mail->Host = SMTP_HOST_APOIO;
	$mail->Port = 587;
	$mail->Username = SMTP_USER_APOIO;
	$mail->Password = SMTP_PASSWORD_APOIO;
	$mail->AddAddress(EMAIL_APOIO_DESTINO);
	$mail->SetFrom('suporte@agenciagroup.com.br', 'AGÊNCIA GROUP');
	$mail->Subject = 'Contato via site - AGENCIA GROUP';
	$mail->AltBody = 'To view the message, please use an HTML compatible email viewer!';
	$mail->MsgHTML($mensagem);

	try {
		$mail->Send();
		echo "<script> alert('Sua mensagem foi enviada com sucesso!'); history.back();</script>";
	} catch (phpmailerException $e) {
		error_log('PHPMailer: ' . $e->errorMessage());
		echo "<script> alert('Erro ao enviar. Tente novamente mais tarde.'); history.back();</script>";
	} catch (Exception $e) {
		error_log('Email: ' . $e->getMessage());
		echo "<script> alert('Erro ao enviar. Tente novamente mais tarde.'); history.back();</script>";
	}
} else {
	echo "<script> alert('Captcha incorreto. Favor tente de novo!'); history.back();</script>";
}
?>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-11035907845"></script>
<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());
	gtag('config', 'AW-11035907845');
	gtag('event', 'conversion', {'send_to': 'AW-11035907845/UEpGCM2L94MYEIWuqo4p'});
</script>
