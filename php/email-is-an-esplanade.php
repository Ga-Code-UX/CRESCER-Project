<?php
  //Variáveis
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  $date = date('d/m/Y');
  $time = date('H:i:s');
  //Compo E-mail
  $archive = "
    <html>
      <p><b>Nome: </b>$name</p>
      <p><b>E-mail: </b>$email</p>
      <p><b>Assunto: </b>$subject</p>
      <p><b>Mensagem: </b>$message</p>
      <p>Marcar reserva nesta <b>$date</b> às <b>$time</b></p>
    </html>
  ";
 
  //Emails para quem será enviado o formulário
  $destiny= "reservas@eumamesa.pt";
  $subject_Matter = $subject;
  //Este sempre deverá existir para garantir a exibição correta dos caracteres
  $headers  = "MIME-Version: 1.0\n";
  $headers .= "Content-type: text/html; charset=UTF-8\n";
  $headers .= "From: $name <$email>";
  //Enviar
  mail($destiny, $subject_Matter, $archive, $headers);
 
  echo "<meta http-equiv='refresh' content='0;URL=../reserva-e-uma-mesa.html'>";
?>
