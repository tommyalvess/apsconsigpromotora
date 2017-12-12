<?php

include_once(‘phpmailer.php’); //Chama o arquivo phpmailer.php com as funções para realizar o envio.

//#########################################
// Recebe as informações do formulário
//#########################################

$nome = $_POST[‘inputNome’];
$email = $_POST[inputEmail];
$assunto = $_POST[‘inputTelefone’];
$mensagem = $_POST[‘inputMensagem’];

//#########################################
// Dados da conta de e-mail que fará o envio
//#########################################

$smtp = new Smtp("localhost"); //Endereço do SMTP, geralmente localhost.
$smtp->user = "apsconsigpromotora.com.br"; //Conta de email
$smtp->pass = "aps1255**1"; //Senha da Conta de e-mail.
$smtp->debug = false; //Somente para usuários avançados que desejam o log do envio para testes.

//#########################################
// Envio do formulário
//#########################################

$to = "atendimento@apsconsigpromotora.com.br"; //Informe aqui o e-mail que deve receber a mensagem do formulário.
$from = $email;
$subject = "Contato – " . $assunto;
$msg = $mensagem;

if (isset($_POST[‘submit’])) {
if($nome && $email && $assunto && $mensagem) {
if($smtp->Send($to, $from, $subject, $msg)){
echo "<script>alert(‘Contato enviado!’);</script>";
echo "<script>window.location = ‘index.php’;</script>"; //Altere aqui para o endereço de sua página.
exit;
}
}

else {
echo "<script>alert(‘Preencha todos os campos!’);</script>";
exit;
}

}

?>
