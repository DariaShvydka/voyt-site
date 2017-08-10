<?php

if ( isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message']) ) {

    $leadData = $_POST;

    // get _POST data
    $postData = array(
        'Name: ' => $leadData['name'],
        'E-Mail: ' => $leadData['email'],
        'Message: ' => $leadData['message']
    );

    $strPostData = '';
    foreach ($postData as $key => $value)
    $strPostData .= ($strPostData == '' ? '' : ' ').$key.' '.($value)."<br>";
    $str .= "<p><strong>Питання з форми сайту</strong> <br/> ".($strPostData)."</p>\r\n";
    require 'class.phpmailer.php'; // phpmailer script
    $mail = new PHPMailer();
    $mail->From = 'info@gmail.com';      // from email
    $mail->FromName = 'Info';   // from name
    // $mail->AddAddress('oleg.nasteka@gmail.com', 'Oleg'); // to, name
    $mail->AddAddress('voyt.print@gmail.com', 'Voyt'); // change to work e-mail


    $mail->IsHTML(true);        // email format HTML
    $mail->Subject = "Повідомлення з контактної форми";  // subject

    $mail->Body = $str;
    // send mail
    if (!$mail->Send()) die ('Mailer Error: '.$mail->ErrorInfo);
    else
    {
        header('http://clients.pp.ua');
        echo('Your message has been sent!');
        exit();
    }
}
?>