<?php
require("class.phpmailer.php");
        $mailer = new PHPMailer();
        $mailer->IsSMTP();
        $mailer->Host = 'relay-hosting.secureserver.net';
        $mailer->Port = 25; //must keep port 25
        $mailer->SMTPAuth = FALSE;
        $mailer->Username = 'youremail@gmail.com';  // Change this to your gmail address
        $mailer->Password = 'password';  // Change this to your gmail password
        $mailer->From = 'youremail@gmail.com';  // Change this to your gmail address
        $mailer->FromName = 'your name'; // This will reflect as from name in the email to be sent
        $mailer->Body = 'This is test message from online Godaddy';
        $mailer->Subject = 'This is your subject.';
        $mailer->AddAddress('your_recieving_email@gmail.com');  // This is where you want your email to be sent
        if(!$mailer->Send())
        {
           echo "Message was not sent<br/ >";
           echo "Mailer Error: " . $mailer->ErrorInfo;
        }
        else
        {
           echo "Message has been sent";
        }
?>

<!-- Note your gmail account should allow less secure App to send email -->