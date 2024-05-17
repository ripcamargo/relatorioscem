<?php

  //Variáveis
  $nome = $_POST['NomeCliente'];
  $empresa = $_POST['EmpresaCliente'];
  $email = $_POST['EmailCliente'];
  $relatorio = $_POST['Relatorio'];
  $textopedidocustom = $_POST['Obs'];
  $data_envio = date('d/m/Y');
  $hora_envio = date('H:i:s');

  //Emails para quem será enviado o formulário
  $destino = "relatorios@alumisoft.com.br";
  $assunto = "Personalização de Relatório";

  //Compo E-mail
  $corpo = "
    <html>
      <p><b>Nome: </b>$nome</p>
      <p><b>E-mail: </b>$email</p>
      <p><b>Mensagem: </b>$mensagem</p>
      <p>Este e-mail foi enviado em <b>$data_envio</b> às <b>$hora_envio</b></p>
    </html>
  ";
  
  $cabeca = "From: relatorios@alumisoft.com.br"."\n"."Reply-to: ".$email."\n"."X-Mailer:PHP/".phpversion();

  if(mail($destino,$assunto,$corpo,$cabeca)){
    echo("E-mail enviado com sucesso!");
  }else{
    echo("Houve um erro ao enviar o e-mail!")
  }


?>