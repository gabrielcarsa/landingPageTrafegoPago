<?php

$nome = addslashes($_POST['nome']);
$email = addslashes($_POST['email']);
$celular = addslashes($_POST['celular']);
$objetivo = addslashes($_POST['objetivo']);
$assunto = "Consultoria Site";

$to = "contato@edusoares.com.br";

$body = "Nome: ".$nome."\r\n"."Email: ".$email."\r\n"."Celular: ".$celular."\r\n"."Objetivo: ".$objetivo;
$header = "From: suporte@edusoares.com.br"."\r\n"."Reply-To:".$email."\r\n"."X=Mailer:PHP/".phpversion();

if(mail($to,$assunto,$body,$header)){
    echo("Sua mensagem foi enviado! Obrigado, em breve entraremos em contato.");
}else{
    echo("Não foi possível enviar sua mensagem, tente novamente");
}
?>