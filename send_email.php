<?php

// contact form data
$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['msg'];
$data_envio = date('d/m/Y');
$hora_envio = date('H:i:s');

// email body
$arquivo = "
<html>
    <p><b>Nome: </b>$nome</p>
    <p><b>E-mail: </b>$email</p>
    <p><b>Mensagem: </b>$mensagem</p>
    <p>Este e-mail foi enviado em <b>$data_envio</b> às <b>$hora_envio</b></p>
</html>
";

//send email

// destinatary email
$emailenviar = "???????"; // ATENÇÃO!!!!!!!! ESTE EMAIL DEVE SER O EMAIL DA EMPRESA 
$destino = $emailenviar;
$assunto = "Contato pelo Site";

// formatting email to html

$headers = "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "From: $nome <$email>\r\n"; // remetente
$headers .= "Return-Path: $email\r\n"; // return-path
$enviaremail = mail($destino, $assunto, $arquivo, $headers);


if($enviaremail){
    header("location: index.php?i=contact&status=sucesso");
}
else{
    header("index.php?i=contact&status=falha");
}

?>