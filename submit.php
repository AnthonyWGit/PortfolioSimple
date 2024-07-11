<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'mailer/Exception.php';
require 'mailer/PHPMailer.php';
require 'mailer/SMTP.php';

$mail = new PHPMailer;
$mail->isSMTP(); 
$mail->SMTPDebug = 2; // 0 = off (for production use) - 1 = client messages - 2 = client and server messages
// $mail->Host = 'localhost';
// $mail->Port = 1025;
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'moumouthw@gmail.com';
$mail->Password = 'REDACTED';
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
$mail->Port = 465;


$filteredSubject = filter_var($_POST['subject'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$filteredContent = filter_var($_POST['content'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$filteredEmail = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
$validatedEmail = filter_var($filteredEmail, FILTER_VALIDATE_EMAIL);
if ($validatedEmail) $headers = 'From: '.$validatedEmail;
$subjectLength = strlen($filteredSubject);
$postLenght = strlen($filteredContent);
$errorMsg = "";
$errors = 0;
if ($subjectLength > 50)
{
    $errorMsg = "Votre titre fictif est trop long";
    $errors = $errors + 1;
}

if ($postLenght > 500)
{
    $errorMsg = "Votre message fictif est trop long";
    $errors = $errors + 1;
}

if (empty($subjectLength))
{
    $errorMsg = "Le sujet est vide";
    $errors = $errors + 1;
}

if (empty($postLenght))
{
    $errorMsg = "Le contenu est vide";
    $errors = $errors + 1;
}
if ($errors == 0)
{
    $mail->setFrom($validatedEmail);
    $mail->addAddress("anthony.wetzstein@gmail.com");
    $mail->Subject = $filteredSubject;
    $mail->msgHTML($filteredContent); //$mail->msgHTML(file_get_contents('contents.html'), __DIR__); //Read an HTML message body from an external file, convert referenced images to embedded,
    // $mail->send();
    echo "Votre message fictif a bien été envoyé";
}
else
{
    echo $errorMsg;
}
// header('Location:index.php');