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
	// Define os dados do servidor e tipo de conex�o

	$secret = RECAPTCHA_SECRET_ENVIA;
	$ip = $_SERVER['REMOTE_ADDR'];
	$captcha = isset($_POST['g-recaptcha-response']) ? $_POST['g-recaptcha-response'] : '';

	$rsp = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=" . urlencode($secret) . "&response=" . urlencode($captcha) . "&remoteip=" . urlencode($ip));



	// var_dump($rsp);
	
	$arr = json_decode($rsp, TRUE);
	

	if (isset($arr['success']) && $arr['success'] == 1) {
		$mensagem_raw = isset($_POST['mensagem']) ? $_POST['mensagem'] : '';
		if (strpos($mensagem_raw, '@') !== false || strpos($mensagem_raw, 'http') !== false) {
			echo "<script> alert('Mensagem contém conteúdo não permitido.'); history.back();</script>";
			exit;
		}

		$mail = new PHPMailer();
		$mensagem = "<b>Formulário: Obtenha Apoio </b> <br /> <br />";
		$mensagem .= "<b>Nome:</b> " . texto(isset($_POST['name']) ? $_POST['name'] : '') . " <br />";
		$mensagem .= "<b>E-mail:</b> " . texto(isset($_POST['email']) ? $_POST['email'] : '') . " <br />";
		$mensagem .= "<b>Mensagem:</b> " . texto($mensagem_raw) . " <br />";
		//$mensagem.= "<b>Data:</b> ".$_POST['data']." <br />";
		//$mensagem.= "<b>Assunto:</b> ".texto($_POST['assunto'])."  <br />";
		//$mensagem.= "<b>Mensagem:</b> ".texto($_POST['mensagem'])."  <br />";

		$mail->IsSMTP();
		$mail->SMTPDebug = 0;
		$mail->SMTPAuth = true;
		$mail->Host = SMTP_HOST;
		$mail->Port = SMTP_PORT;
		$mail->Username = SMTP_USER;
		$mail->Password = SMTP_PASSWORD;
		$mail->AddAddress('dfinformatica@dfinformatica.com.br');
		$mail->SetFrom('suporte@agenciagroup.com.br', 'AGENCIA GROUP');
		$mail->Subject = 'Contato via site - DF INFORMATICA';
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
		echo "<script> alert('captcha errado. Favor tente de novo!'); history.back();</script>";
	}

	?>
</body>

</html>