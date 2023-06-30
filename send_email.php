<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$name = $_POST["name"];
$email = $_POST["email"];

$message = $_POST["message"];

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

// $mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = "fruitfruit833@gmail.com";
$mail->Password = "mailkrishna7";

$mail->setFrom($email, $name);
$mail->addAddress("gkrishnasameer7@gmail.com", "Krishna");

$mail->Subject = $subject;
$mail->Body = $message;

$mail->send();

header("Location: index.html");