<?php
    if(!empty($_POST)){
        
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            require 'func.php';
            
            $error = '';
            if(isset($_POST['nombre']) && !empty($_POST['nombre'])){
                $nombre = cambio($_POST['nombre']);
            }else{
                $error = "E1";
            }

            if(isset($_POST['correo'])&&!empty($_POST['correo'])){
                if(filter_var($_POST['correo'],FILTER_VALIDATE_EMAIL)){
                    $correo = $_POST['correo'];
                }else{
                    $error = "E2";
                }
            }else{
                $error = "E3";
            }

            if(isset($_POST['telefono']) && !empty($_POST['telefono'])){
                $telefono = cambio($_POST['telefono']);
            }else{
                $error = "E4";
            }

            if(isset($_POST['mensaje']) && !empty($_POST['mensaje'])){
                $mensaje = cambio($_POST['mensaje']);
            }else{
                $error = "E5";
            }

            if($error == ''){
                echo "1";
                $msjcli = "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'><html><head><title>CONFIRMA TU CUENTA - GLCLOUD</title><link href='https://fonts.googleapis.com/css?family=Be+Vietnam|Hepta+Slab|Quicksand|Roboto+Mono|Varela+Round&display=swap' rel='stylesheet'> <script src='https://kit.fontawesome.com/0cc4c709ea.js' crossorigin='anonymous'></script> </head><body><center><div style='width: 800px; height: 100%; '><table width='100%' height='100%' style='vertical-align: top;'><tr><td style='font-family: Hepta Slab, serif; background: #CC0A00; color: #ffffff; padding-left: 10px;'><table width='100%'><tr><td width='70%'><p style='font-size:2vw;'>Cotizacion enviada</p></td><td width='30%' style='text-align: right; padding-right: 10px;'><p style='font-size: 1vw;'><big>GladiumSoft</big></p></td></tr></table></td></tr><tr><td width='100%' height='8vw' style='vertical-align: top;'><h3 style='font-family: Be Vietnam, sans-serif;'>Gracias por contactarnos!</h3><p style='font-family: Be Vietnam, sans-serif;'>Estimado $nombre en breve uno de nuestros especialistas se pondr&aacute; en contacto con usted para resolver sus dudas y levantar los requerimientos necesarios para realizar su proyecto.</p> <br> <br> <br></p></td></tr><tr><td> <small style='font-family: Varela Round, sans-serif; font-size: .7vw;'><center>Aviso</center><p>El material presentado esta sujeto a derechos de autor, tanto logos como los v&iacute;nculos asociados corresponden a informaci&oacute;n &uacute;nicamente informativa, en ning&uacute;n momento o v&iacute;nculo de este correo se le pedir&aacute; informaci&oacute;n financiera, y/o informacio&oacute;n personal, estos datos pueden ser pedidos &uacute;nicamente desde el portal de GladiumSoft, bajo su concentimiento.<br>GLCLOUD &reg; no tiene revendedores de servicio, dicho servicio &uacute;nicamente puede ser contratado desde el portal de GLCLOUD</p> </small></td></tr><tr><td style='background: #E5E5E5; padding-top: 15px; padding-bottom: 15px; font-family: Be Vietnam, sans-serif; font-size: 1.5vw;'><center>Polit&iacute;cas de privacidad <big>|</big> T&eacute;rminos y condiciones <big>|</big> Contacto</center></td></tr></table></div></center></body></html>";
                $subject= "Gracias por contactar con nosotros";
                mandaCorreo($msjcli,$correo,$subject);
                $msjemp = "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'><html><head><title>SOLICITUD DE CONTACTO</title><link href='https://fonts.googleapis.com/css?family=Be+Vietnam|Hepta+Slab|Quicksand|Roboto+Mono|Varela+Round&display=swap' rel='stylesheet'> <script src='https://kit.fontawesome.com/0cc4c709ea.js' crossorigin='anonymous'></script> </head><body><center><div style='width: 800px; height: 100%; '><table width='100%' height='100%' style='vertical-align: top;'><tr><td style='font-family: Hepta Slab, serif; background: #CC0A00; color: #ffffff; padding-left: 10px;'><table width='100%'><tr><td width='70%'><p style='font-size:2vw;'>Solicitud de contacto</p></td><td width='30%' style='text-align: right; padding-right: 10px;'><p style='font-size: 1vw;'><big>GladiumSoft</big></p></td></tr></table></td></tr><tr><td width='100%' height='8vw' style='vertical-align: top;'><h3 style='font-family: Be Vietnam, sans-serif;'>Buen d&iacute;a!</h3><p style='font-family: Be Vietnam, sans-serif;'>El sr(a) $nombre acaba de emitir una solicitud de contacto con los siguientes datos</p><p style='font-family: Be Vietnam, sans-serif;'>Nombre: $nombre</p><p style='font-family: Be Vietnam, sans-serif;'>Correo: $correo</p><p style='font-family: Be Vietnam, sans-serif;'>Tel&eacute;fono: $telefono</p><p style='font-family: Be Vietnam, sans-serif;'>Mensaje: $mensaje</p><p style='font-family: Be Vietnam, sans-serif;'>Favor de atender a la brevedad la solicitud, gracias y buen d&iacute;a.</p><hr><center><p style='font-family: Be Vietnam, sans-serif;'>Atentamente: Edgar Andrei Olvera Velasco - CEO</p></center> <br> <br> <br></p></td></tr><tr><td> <small style='font-family: Varela Round, sans-serif; font-size: .7vw;'><center>Aviso</center><p>El material presentado esta sujeto a derechos de autor, tanto logos como los v&iacute;nculos asociados corresponden a informaci&oacute;n &uacute;nicamente informativa, en ning&uacute;n momento o v&iacute;nculo de este correo se le pedir&aacute; informaci&oacute;n financiera, y/o informacio&oacute;n personal, estos datos pueden ser pedidos &uacute;nicamente desde el portal de GladiumSoft, bajo su concentimiento.<br>GLCLOUD &reg; no tiene revendedores de servicio, dicho servicio &uacute;nicamente puede ser contratado desde el portal de GLCLOUD</p> </small></td></tr><tr><td style='background: #E5E5E5; padding-top: 15px; padding-bottom: 15px; font-family: Be Vietnam, sans-serif; font-size: 1.5vw;'><center>Polit&iacute;cas de privacidad <big>|</big> T&eacute;rminos y condiciones <big>|</big> Contacto</center></td></tr></table></div></center></body></html>";
                $subject = "Solicitud de cotizacion";
                $correo = "abelgsisc@gmail.com";
                mandaCorreo($msjemp,$correo,$subject);
                mandaCorreo($msjemp,'eandrei.olvera@gmail.com',$subject);
            }else{
                
                echo $error;
            }

        }else{
            echo "Error request metodo";
        }
    }else{
        echo "Error metodo post";
    }