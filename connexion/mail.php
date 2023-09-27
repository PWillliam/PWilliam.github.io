<?php
/**
*@param int
*@return string
 */
require "PHPMailer/PHPMailerAutoload.php";
function GenerateToken($lenght){
    $token = "0123456789azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN";
    return substr(str_shuffle(str_repeat($token, $lenght)), 0, $lenght);
}
    function Sendemail($id, $token, $email, $msg, $objet, $name) {
        function smtpmailer($to, $from,$from_name, $subject, $body) {
            $mail = new PHPMailer();
            $mail->isSMTP();
            $mail->SMTPAuth = true;

            $mail->SMTPSecure = 'tls';
            $mail-> Host = 'smtp-mail.outlook.com';
            $mail->Port = 587;
            $mail->Username = $from;
            $mail->Password = "DWWMauboue";

            $mail->isHTML();
            $mail->From = $from;
            $mail->FromName = $from_name;
            $mail->Sender = $from;
            $mail->addReplyTo($from, $from_name);
            $mail->CharSet = 'UTF-8';
            $mail->Subject = $subject;
            $mail->Body = $body;
            $mail->addAddress($to);

            if (!$mail->Send()) {
                echo "Le mail ne c'est pas envoyé ressayer plus tard";
                
            } else {
                echo "Le mail c'est envoyé avec succés";

        }
    }
    //$msg= "lien pour réinitialiser votre mot de passe :http://localhost/cours_php/PWillliam.github.io/reset.php?id=$id&token=$token";
    smtpmailer ($email, 'dwwm.auboue@hotmail.com', $name, $objet, $msg);
}

?>