<?php
$project_name = "VOYT - Заявка с сайта";
$admin_email = "dariashvydka@gmail.com"; //поменять на рабочий
$form_subject = "VOYT - Заявка с сайта";

$c = true;

$translate_arr = array(
    "name"  => "Имя",
    "e-mail" => "E-mail",
    "text" => "Сообщение",
);

foreach ( $_POST as $key => $value ) {
        $message .= "
			" . ( ($c = !$c) ? '<tr>':'<tr style="background-color: #f8f8f8;">' ) . "
			<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>$translate_arr[$key]</b></td>
			<td style='padding: 10px; border: #e9e9e9 1px solid;'>$value</td>
		</tr>
		";
}

$message = "<table style='width: 100%;'>$message</table>";
function adopt($text) {
    return '=?UTF-8?B?'.Base64_encode($text).'?=';
}
$headers = "MIME-Version: 1.0" . PHP_EOL .
    "Content-Type: text/html; charset=utf-8" . PHP_EOL .
    'From: '.adopt($project_name).' <'.$admin_email.'>' . PHP_EOL .
    'Reply-To: '.$admin_email.'' . PHP_EOL;
mail($admin_email, adopt($form_subject), $message, $headers );
exit();