<?php
  //Variáveis
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $date = date('d/m/Y');
  $time = date('H:i:s');
  //Compo E-mail
  $archive = "
    <html>
      <p><b>Nome: </b>$name</p>
      <p><b>E-mail: </b>$email</p>
      <p><b>Mensagem: </b>$message</p>
      <p>Este e-mail foi enviado em <b>$date</b> às <b>$time</b></p>
    </html>
  ";
 
  //Emails para quem será enviado o formulário
  $destino = "reservas@eumamesa.pt";
  $assunto = "Contato pelo Site";
  //Este sempre deverá existir para garantir a exibição correta dos caracteres
  $headers  = "MIME-Version: 1.0\n";
  $headers .= "Content-type: text/html; charset=iso-8859-1\n";
  $headers .= "From: $name <$email>";
  //Enviar
  mail($destino, $assunto, $archive, $headers);
 
  echo "<meta http-equiv='refresh' content='10;URL=../reserva-e-uma-mesa.html'>";
?>
