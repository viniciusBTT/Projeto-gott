<?php
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$assunto = filter_input(INPUT_POST, 'assunto', FILTER_SANITIZE_SPECIAL_CHARS);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_SPECIAL_CHARS);
$mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_SPECIAL_CHARS);


use PHPMailer\PHPMailer\PHPMailer;

use PHPMailer\PHPMailer\Exception;


require 'vendor/autoload.php';



$mail = new PHPMailer(true);

try {
   
                       
    $mail->isSMTP();                                            
    $mail->Host = 'smtp.gmail.com';                    
    $mail->SMTPAuth = true;                                   
    $mail->Username   = 'siteformulariogott@gmail.com';                     
    $mail->Password   = 'csgqeonrzdzjqdnw';                               
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;             
    $mail->Port       = 465;                                    

    
    $mail->setFrom('siteformulariogott@gmail.com', $nome);
    $mail->addAddress('comercial@gottconsultoria.com.br', 'Gott Consultoria');     
    $mail->addReplyTo($email, $nome);
    

     

   
    $mail->isHTML(true);                                
    $mail->Subject =  utf8_decode($assunto);
    $mail->Body    =  utf8_decode("<strong>Contatante: </strong>" . $nome . "<br>" . "<br>" . "<strong>Email : </strong>" . $email .  "<br>" . "<br>" .  "<strong>Telefone: </strong>" . $telefone . "<br>" . "<br>" . "<strong>Mensagem: </strong>" . "<br>" . $mensagem);
    $mail->AltBody =  utf8_decode("Contatante: " . $nome  ."Telefone: " . $telefone .  "Mensagem: "  . $mensagem);

    if($mail->send()) {

        if(isset($_GET['inicio'])) { 
            header("location:index.php?sucesso");
        } else {
             // enviando novamente o arquivo como parâmtro url para que ele seja excluido
             header("location:fale_conosco.php?sucesso");
        }
       
   }
    
    
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>