<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if (isset($POST["send"]){
    $mail = new PHPMailer(true);

    $mail -> isSMTP();
    $MAIL -> Host = 'smtp.gmail.com'
    $mail -> SMTPAuth = true;
    $mail -> username = 'yadavdentalcareis@gmail.com';
    $mail -> password = 'kllb qixl meco cwsd';
    $mail -> SMTPSecure = 'ssl';
    $mail -> port = 456;

    $mail -> setForm('yadavdentalcareis@gmail.com');

    $mail -> HTML(true);

    $mail-> Name = $_POST["name"];
    $mail-> Email = $_POST["email"];
    $mail-> Phone = $_POST["phone"];
    $email-> Date = $_POST["date"];
    $mail-> Message = $_POST["message"];

    $mail-> send();

    echo
    "
    <script>
    alert('sent Successfully');
    documnet.location.href = 'index.html';
    </script>
    "
})
?>