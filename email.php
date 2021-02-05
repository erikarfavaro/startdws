<?php

    require("PHPMailer.php");
    require("SMTP.php");
    require("Exception.php");
    
    use PHPMailer\PHPMailer;

    $alert = "";
    if($_POST){
        if(!$_POST["email"]){
            $alert = "Digite seu Email! <br> ";
        }

        if (!$_POST["message"]) {
            $alert .= "Digite sua mensagem. <br> ";
        }

        if (!$_POST["subject"]) {
            $alert .= "Digite o nome do assunto! <br> ";
        }

        if ($_POST["email"] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == false) {
            $alert .= "E-mail inválido. <br> ";
        }
        else{
            $mail = new PHPMailer\PHPMailer();
            $mail->isSMTP();                       
            $mail->CharSet = 'UTF-8';   
            $mail->Host = 'smtp.gmail.com';             
            $mail->SMTPAuth = true;                     
            $mail->SMTPDebug = 1; 
            $mail->Username = 'erikarfavaro@gmail.com';       
            $mail->Password = 'erika220406';           
            $mail->SMTPSecure = 'ssl';                  
            $mail->Port = 465;                          
            $mail->IsHTML(true);

            $mail->setFrom($_POST["email"]);
            $mail->addAddress("erikarfavaro@gmail.com");        
            $mail->Subject = $_POST["subject"];
            $mail->Body    = $_POST["message"];

        if($mail->send()) {
            header('Location: contato.php');
            }

        }
    }

?>