<?php


if(isset($_POST['email']) && !empty($_POST['email'])){

    $nome = addslashes($_POST['name']);
    $email = addslashes($_POST['email']);
    $message =  addslashes($_POST['message']);

    $to = "contato@elostalentos.com.br";
    $subject = "Contato - ELOS";
    $body = "Nome: ".$nome."\r\n".
    "Email: ".$email."\r\n".
    "Mensagem: ".$message."\r\n";
    $header = "From: enviar@elostalentos.com.br"."\r\n"."Reply-To:".$email."\r\n"."X=Mailer:PHP/".phpversion();

    if(mail($to,$subject,$body,$header)){
        echo("Mensagem enviada com sucesso.");
    }
    else{
        echo("Erro ao enviar a mensagem. Tente novamente.");
    }
}