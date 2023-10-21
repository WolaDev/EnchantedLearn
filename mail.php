<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

// // <?php
if($_POST){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Enter your email address
    $to = 'bozzbhoi@gmail.com';
    $subject = 'New Message from Website';
    $headers = "From: $email" . "\r\n" .
    "Reply-To: $email" . "\r\n";

    if(mail($to,$subject,$message,$headers)){
        header('Location: index.html');
    } else {
        echo "Email sending failed";
    }
}
?>