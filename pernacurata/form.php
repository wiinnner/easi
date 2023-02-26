<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'src/PHPMailer.php';
require 'src/SMTP.php';
require 'src/Exception.php';



// Verificăm dacă formularul a fost trimis
if (isset($_POST['submit'])) {
    // Obținem informațiile din formular
    $name = $_POST['numele'];
    $surname = $_POST['prenumele'];
    $phone = $_POST['telefonul'];
    $address = $_POST['adresa'];
    $service = $_POST['serviciu'];
    $city = $_POST['oras'];

    // Configurăm obiectul PHPMailer
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'victorgudumac2@gmail.com'; // înlocuiește cu adresa ta de e-mail
    $mail->Password = 'Victor.10052005'; // înlocuiește cu parola ta de e-mail
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    // Configurăm adresa de trimitere și destinatarul
    $mail->setFrom('watchfilm335@gmail.com', 'Numele Tau');
    $mail->addAddress('victorgudumac2@gmail.com', 'Victor Gudumac');

    // Adăugăm subiectul și corpul mesajului
    $mail->isHTML(true);
    $mail->Subject = 'Formularul a fost completat';
    $mail->Body = "Nume: $name<br>
                   Prenume: $surname<br>
                   Telefon: $phone<br>
                   Adresa: $address<br>
                   Serviciu: $service<br>
                   Oras: $city";

    // Trimitem e-mailul și verificăm dacă a fost trimis cu succes
    try {
        $mail->send();
        echo 'E-mailul a fost trimis cu succes!';
    } catch (Exception $e) {
        echo "Eroare la trimiterea e-mailului: {$mail->ErrorInfo}";
    }
}
?>
