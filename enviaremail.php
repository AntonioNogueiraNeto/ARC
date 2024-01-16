<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Recuperar dados do formulário
  $nome = $_POST['name'];
  $email = $_POST['email'];
  $tel = $_POST['telefone'];
  $assunto = $_POST['subject'];
  $mensagem = $_POST['message'];


  $data_envio = date('d/m/Y');

  $hora_envio = date('H:i:s');
  // Construir o corpo do e-mail
  $corpo_email = "
        Nome: $nome <br> <br> 
        Telefone de contato: $tel <br><br> 
        Mensagem: $mensagem <br>
    ";

  // Destinatário do e-mail
  $destino = "comercial@arctransporte.com.br";
  $copia_oculta = "ryan@arctransporte.com.br"; 

  // Configurar os cabeçalhos do e-mail
  $headers  = "MIME-Version: 1.0\r\n";
  $headers .= "Content-type: text/html; charset=utf-8\r\n";
  $headers .= "From: $nome <$email>\r\n";
  $headers .= "Bcc: $copia_oculta\r\n";

  // Enviar o e-mail
  if (mail($destino, $assunto, $corpo_email, $headers)) {
    $mensagem_confirmacao = "E-mail enviado com sucesso.";
    $redirect_url = "index.php?msg=" . urlencode($mensagem_confirmacao) . '#formulario';
  } else {
    $mensagem_confirmacao = "Ocorreu um erro ao enviar o e-mail. Tente novamente.";
    $redirect_url = "index.php?msg=" . urlencode($mensagem_confirmacao) . '#formulario';
  }

  // Redirecionar de volta para a página de contato
  header("Location: $redirect_url");
  exit;
} else {
  // Se a requisição não for POST, redirecione para a página de contato
  header("Location: index.php");
  exit;
}
