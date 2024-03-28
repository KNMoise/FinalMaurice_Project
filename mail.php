<?php

$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$organization = $_POST["organization"];
$company = $_POST["company"];
$phone = $_POST["phone"];
$message = $_POST["message"];

require "vendor/autoload.php";
require __DIR__ . '/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$mail = new PHPMailer(true);

// $mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$emailUsername = $_ENV['EMAIL_USERNAME'];
$emailPassword = $_ENV['EMAIL_PASSWORD'];

$mail->Username = $emailUsername;
$mail->Password = $emailPassword;

$mail->setFrom($email, $name);
$mail->addReplyTo($email, $name);
$mail->addAddress("n.moise.ob@gmail.com", "Moise NIZEYIMANA");

$mail->Subject = $subject;
$mail->Body = $message;

$mail->send();

header("Location: sent.html");