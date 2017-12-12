<?php
// define(AppStatus, 0);

if((isset($_POST) && sizeof($_POST) > 0) || AppStatus == 0){
	require_once "class.phpmailer.php";
	require_once "class.smtp.php";

	$emailBase = file_get_contents("_template.email.html");
	$emailFinal = "";

	$setor [] = "Vazio";
	$setor [] = "INSS";

	$emailFinal = str_replace("{DATA}", date('d-m-Y'), $emailBase);
	$emailFinal = str_replace("{NOME}", $_POST["inputNome"], $emailFinal);
	$emailFinal = str_replace("{EMAIL}", $_POST["inputEmail"], $emailFinal);
	$emailFinal = str_replace("{VALOR}", $_POST["inputValor"], $emailFinal);
	$emailFinal = str_replace("{CONVENIO}", $setor[$_POST["setor"]], $emailFinal);
	$emailFinal = str_replace("{TELEFONE}", $_POST["inputTelefone"], $emailFinal);
	$emailFinal = str_replace("{CPF}", $_POST["inputCPF"], $emailFinal);
	$emailFinal = str_replace("{DATENAS}", $_POST["inputDataNas"], $emailFinal);
	$emailFinal = str_replace("{BENEFICIO}", $_POST["inputBeneficio"], $emailFinal);

	$mail = new PHPMailer;

	$sndrEmail = "no-reply";
	$sndrDomain = "apsconsigpromotora.com.br";
	$sndrPassword = "aps1255**1";
	$sndrUsername = "$sndrEmail@$sndrDomain";

	// $to[] = "atendimento@apsconsigpromotora.com.brr";
	$to = "atendimento@apsconsigpromotora.com.br";

	$serverAuth = true;
	$serverPort = 465;
	$serverSecure = "ssl"; //ssl works too
	$serverIp = "p3plcpnl0779.prod.phx3.secureserver.net";

	$mail->isSMTP();
	$mail->CharSet = 'utf-8';
	$mail->Host = $serverIp;
	$mail->SMTPAuth = $serverAuth;
	$mail->Username = $sndrUsername;
	$mail->Password = $sndrPassword;
	$mail->SMTPSecure = $serverSecure;
	$mail->Port = $serverPort;

	//From
	$mail->setFrom($_POST["inputEmail"], $_POST["inputNome"]);

	//To
	$mail->addAddress($to);

	//Reply
	$mail->addReplyTo($_POST["inputEmail"], $_POST["inputNome"]);

	$mail->isHTML(true);

	$mail->Subject = "Contato - Cliente: {$_POST["inputNome"]}";
	$mail->Body = $emailFinal;
	$mail->AltBody = "Required usage of a html support mail client";

	if(!$mail->send()){
		echo "Erro, falha ao enviar o email!<br />";
		echo 'Mailer Error: ' . $mail->ErrorInfo;
	}else{
		echo "Email enviado com sucesso";
	}
}

?>
