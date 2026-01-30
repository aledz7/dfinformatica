<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-11035907845"></script>
<script>
	window.dataLayer = window.dataLayer || [];

	function gtag() {
		dataLayer.push(arguments);
	}
	gtag('js', new Date());

	gtag('config', 'AW-11035907845');
</script>

<!-- Event snippet for Website lead conversion page -->
<script>
	gtag('event', 'conversion', {
		'send_to': 'AW-11035907845/UEpGCM2L94MYEIWuqo4p'
	});
</script>


<?php
include('funcoes.php');
require("phpmailer/class.phpmailer.php");
require 'recaptchalib.php';
// Define os dados do servidor e tipo de conex�o

$response = null;

$secret = "66Lek7MMnAAAAAO6h3dNpx2vinVMjEDLUbOr9Mw2H"; ////ESSE É A SECRET KEY
$ip = $_SERVER['REMOTE_ADDR'];
$captcha = $_POST['g-recaptcha-response'];

// verifique a chave secreta

$reCaptcha = new ReCaptcha($secret);

$rsp = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha&remoteip=$ip");


// var_dump($rsp);

$arr = json_decode($rsp, TRUE);



if ($arr['success'] == 1) {

	// Define os dados do servidor e tipo de conex�o
	$mail = new PHPMailer();

	$mensagem = "<b>Contato via site - DF Informática Apoio </b> <br /> <br />";
	$mensagem .= "<b>Nome:</b> " . texto($_POST['name']) . " <br />";
	$mensagem .= "<b>E-mail:</b> " . texto($_POST['email']) . " <br />";
	//$mensagem.= "<b>Whatsapp:</b> ".$_POST['contato']." <br />";
	//$mensagem.= "<b>Data:</b> ".$_POST['data']." <br />";
	//$mensagem.= "<b>Assunto:</b> ".texto($_POST['assunto'])."  <br />";
	$mensagem .= "<b>Mensagem:</b> " . texto($_POST['mensagem']) . "  <br />";

	$mail->IsSMTP(); // telling the class to use SMTP


	try {
		$mail->Host       = "smtp-vip.uni5.net"; // sets GMAIL as the SMTP server
		$mail->SMTPDebug  = 1; // enables SMTP debug information (for testing) 
		$mail->SMTPAuth   = true; // enable SMTP authentication
		// $mail->SMTPSecure = "ssl";// sets the prefix to the servier
		$mail->Host       = "smtp-vip.uni5.net"; // sets GMAIL as the SMTP server
		$mail->Port       = 587; // set the SMTP port for the GMAIL server
		$mail->Username   = "agenciagroup@agenciagroup.com.br"; // GMAIL username
		$mail->Password   = "Df@345181"; // GMAIL password
		//$mail->AddReplyTo($_POST['email'], $_POST['nome']);
		$mail->AddAddress('suporte@agenciagroup.com.br');
		//$mail->AddAddress('luizfelype@dfinformatica.com.br');
		//$mail->AddAddress('adriano@dfinformatica.com.br');
		$mail->SetFrom('suporte@agenciagroup.com.br', 'AGÊNCIA GROUP');
		$mail->Subject = 'Contato via site - AGENCIA GROUP';
		$mail->AltBody = 'To view the message, please use an HTML compatible email viewer!';
		$mail->MsgHTML($mensagem);
		$mail->Send();
	} catch (phpmailerException $e) {
		echo $e->errorMessage(); //Pretty error messages from PHPMailer
	} catch (Exception $e) {
		echo $e->getMessage(); //Boring error messages from anything else!
	}
} else {
	echo "<script> alert('captcha errado. Favor tente de novo!'); history.back();</script>";
}


?>