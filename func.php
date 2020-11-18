<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    
    require 'src/Exception.php';
    require 'src/PHPMailer.php';
    require 'src/SMTP.php';
    function mandaCorreo($mensaje,$correo,$subject){
        $mail = new PHPMailer(true);
    
        try {
            //Server settings
            $mail->SMTPDebug = 0;                      // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host       = 'smtp.ionos.mx';                    // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'noreplay@gladiumsoft.com';                     // SMTP username
            $mail->Password   = 'oll33oll33A1-';
            $mail->SMTPAuth = true;
            $mail->SMTPAutoTLS = true;                               // SMTP password
            $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
            $mail->Port       = 587;                                    
            $mail->setFrom('noreplay@gladiumsoft.com');
            $mail->addAddress($correo);             
            
            $mail->isHTML(true);                                  
            $mail->Subject = $subject;
            $mail->Body    = $mensaje;
            $mail->AltBody = '';
            $mail->Priority = 1;
            $mail->HeaderLine('X-Priority', $mail->Priority);
    
            $mail->send();
            return true;
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            //echo "Error de envio de correo";
        }
    
    }

    function cambio($text){
        $texto = htmlspecialchars($text);
        $texto = str_replace('\n','<br>',$texto);
        $texto = str_replace('\r','',$texto);
        return $texto;
    }

?>