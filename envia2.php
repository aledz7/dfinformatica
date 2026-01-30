<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=AW-11391837984"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());
		gtag('config', 'AW-11391837984');
	</script>


</head>

<body>
	<!-- Event snippet for Website lead conversion page -->
	<script>
		gtag('event', 'conversion', {
			'send_to': 'AW-11391837984/X4VCCPz_rvYYEKDOhrgq'
		});
	</script>
	<script>
		//setTimeout(window.location='.', 2000);
	</script>
	<?php /*?><div style="text-align:center; padding-top:30px;"><a href="." style="font-size:30px; color:#006657; font-family:Arial;">Solicitação enviada com sucesso. Voltar ao site.</a></div><?php */ ?>
	<?php

	error_reporting(0);

	include('funcoes.php');
	require("phpmailer/class.phpmailer.php");
	require 'recaptchalib.php';
	// Define os dados do servidor e tipo de conex�o

	$response = null;

	$secret = "6Lf6mgopAAAAAKL5yz-bz7K8qLS7G5iaMSzbClI2"; ////ESSE É A SECRET KEY
	$ip = $_SERVER['REMOTE_ADDR'];
	$captcha = $_POST['g-recaptcha-response'];

	// verifique a chave secreta

	$reCaptcha = new ReCaptcha($secret);

	$rsp = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha&remoteip=$ip");



	// var_dump($rsp);

	$arr = json_decode($rsp, TRUE);



	if ($arr['success'] == 1) {


		// Define os dados do servidor e tipo de conexão
		$mail = new PHPMailer();

		$mensagem = "<b>Contato via site - Agência Group </b> <br /> <br />";
		$mensagem .= "<b>Nome:</b> " . texto($_POST['name']) . " <br />";
		$mensagem .= "<b>E-mail:</b> " . texto($_POST['email']) . " <br />";
		$mensagem .= "<b>Mensagem:</b> " . $_POST['mensagem'] . " <br />";
		$mensagem .= "<b>Número:</b> " . $_POST['contato'] . " <br />";
		//$mensagem.= "<b>Data:</b> ".$_POST['data']." <br />";
		//$mensagem.= "<b>Assunto:</b> ".texto($_POST['assunto'])."  <br />";
		//$mensagem.= "<b>Mensagem:</b> ".texto($_POST['mensagem'])."  <br />";

		$mail->IsSMTP(); // telling the class to use SMTP


		try {
			// sets GMAIL as the SMTP server
			$mail->SMTPDebug  = 1; // enables SMTP debug information (for testing) 
			$mail->SMTPAuth   = true; // enable SMTP authentication
			//$mail->SMTPSecure = "ssl";// sets the prefix to the servier
			echo $mail->Host  = "smtpi.uni5.net";
			$mail->Port       = 587; // set the SMTP port for the GMAIL server
			$mail->Username   = "dfinformatica@dfinformatica.com.br"; // GMAIL username
			$mail->Password   = "Df@345181"; // GMAIL password
			//$mail->AddReplyTo($_POST['email'], $_POST['nome']);
			$mail->AddAddress('dfinformatica@dfinformatica.com.br');
			//$mail->AddAddress('alessandro@dfinformatica.com.br');
			//$mail->AddAddress('adriano@dfinformatica.com.br');
			$mail->SetFrom('suporte@agenciagroup.com.br', 'AGENCIA GROUP');
			$mail->Subject = 'Contato via site - DF INFORMATICA';
			$mail->AltBody = 'To view the message, please use an HTML compatible email viewer!';
			$mail->MsgHTML($mensagem);
			$mail->Send();

			echo "<script> alert('Sua mensagem foi enviada com sucesso!'); history.back();</script>";

			//exit();

		} catch (phpmailerException $e) {
			echo $e->errorMessage(); //Pretty error messages from PHPMailer
		} catch (Exception $e) {
			echo $e->getMessage(); //Boring error messages from anything else!
		}
	} else {
		echo "<script> alert('captcha errado. Favor tente de novo!'); history.back();</script>";
	}

	?>
</body>

</html>