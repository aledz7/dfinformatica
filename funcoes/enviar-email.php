<?php
/*include('class/info-site.php');
$infoSite = InfoSite::getInstance(Conexao::getInstance())->rsDados();

$nomeRemente = $infoSite->nome;
$emailRemente = $infoSite->email;

if($_POST['acao'] == 'enviaEmail') {
	include('funcoes/enviar-email.php');
	EnviarEmail($_POST['assunto'].' '.$infoSite->nome, $_POST['nome'], $emailRemente, $emailRemente, $_POST['email'], "Nome: {$_POST['nome']}<br>
E-mail: {$_POST['email']}<br>
Telefone: {$_POST['telefone']}<br>
Mensagem: {$_POST['mensagem']}");
}
*/

if(!function_exists("EnviarEmail")) {
	function EnviarEmail($assunto, $nomeRemente, $emailRemente, $emailDestino, $emailDeResposta, $msgHTML, $alert='Solicitação enviada com sucesso.') {
		if($emailDestino <> '') {
			$remetente = "$nomeRemente <$emailRemente>"; 
			$headers = "Content-Type: text/html; charset=utf-8\n";
			$headers.="From: $remetente\n"; 
			$headers.="Reply-To: $emailDeResposta\n"; 
			$headers.="Subject: $assunto\n"; 
			$headers.="Return-Path: $remetente\n"; 
			$headers.="MIME-Version: 1.0\n"; 
			$headers.="X-Priority: 3\n"; 
			/// envia o email
			mail($emailDestino, $assunto, $msgHTML, $headers);
		}
		
		if($alert <> 'N') {
			echo "	<script>
					alert('{$alert}');
					</script>";
		}
	}
}

if(!function_exists("EnviaEmailAutenticado")) {
	function EnviaEmailAutenticado($assunto, $html, $enviar_parar='', $resposta_nome='', $resposta_email='', $alert='Solicitação enviada com sucesso.') {
		global $conInstanciada, $InfoSiteInstanciada, $phpmailer_instanciada;
		
		if(file_exists('class/info-site.php')) {
			include('class/info-site.php');
			include("ferramentas/phpmailer/class.phpmailer.php");
		} else {
			include('../class/info-site.php');
			include("../ferramentas/phpmailer/class.phpmailer.php");
		}
		
		$infoSite = InfoSite::getInstance(Conexao::getInstance())->rsDados();
		
		
		// Define os dados do servidor e tipo de conexão
		$mail = new PHPMailer();	
		$mail->IsSMTP(); // telling the class to use SMTP
		
		//print_r($resposta); exit;
		//echo $infoSite->email; exit;
		
		if($resposta_nome == '') {
			$resposta_nome = $infoSite->nome;
		}
		
		if($resposta_email == '') {
			$resposta_email = $infoSite->email;
		}
		
		if($enviar_parar == '') {
			$enviar_parar = $infoSite->email;
		}
				
		try {
			$mail->Host       = $infoSite->host_smtp;// sets GMAIL as the SMTP server
			$mail->SMTPDebug  = 1;// enables SMTP debug information (for testing)
			$mail->SMTPAuth   = true;// enable SMTP authentication
			// $mail->SMTPSecure = "ssl";// sets the prefix to the servier
			$mail->Port       = $infoSite->porta_smtp;// set the SMTP port for the GMAIL server
			$mail->Username   = $infoSite->usuario_smtp;// GMAIL username
			$mail->Password   = $infoSite->senha_smtp;// GMAIL password
			$mail->AddReplyTo($resposta_email, $resposta_nome);
			$mail->AddAddress($enviar_parar);
			$mail->SetFrom($infoSite->usuario_smtp, $resposta_nome);
			$mail->Subject = $assunto;
			$mail->AltBody = 'Para ver essa mensagem, por favor use um leitor de e-mail compatível com HTML!'; 
			$mail->MsgHTML($html.'<br>
	<br>
	<br>
	'.$_SERVER['HTTP_HOST']);
			$mail->Send();
		} catch (phpmailerException $e) {
			echo $e->errorMessage(); //Pretty error messages from PHPMailer
		} catch (Exception $e) {
			  echo $e->getMessage(); //Boring error messages from anything else!
		}
		
		if($alert <> 'N') {
			echo "	<script>
					alert('{$alert}');
					</script>";
		}
	}
}
?>