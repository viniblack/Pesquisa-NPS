<?php 


$justificativa = addcslashes($_POST['justificativa']);

$to = "xovite8305@twit-mail.com";
$subjet = "Nps - pesquisa";
$body = "justificativa: ".$justificativa;

$header = "From:xovite8305@twit-mail.com"."\r\n".
            "X=Mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header)){


  echo("Email enviado com sucesso");
}else{
  echo("O Email não pode ser eviado");

?>