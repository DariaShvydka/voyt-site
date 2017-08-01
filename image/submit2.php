<?php
/**
 * Created by PhpStorm.
 * User: Daria
 * Date: 29.07.17
 * Time: 16:28
 */
if((isset($_POST['name'])&&$_POST['name']!="")&&(isset($_POST['phone'])&&$_POST['phone']!="")){ //Проверка отправилось ли наше поля name и не пустые ли они
    $to = 'dariashvydka@gmail.com'; //Почта получателя, через запятую можно указать сколько угодно адресов
    $subject = 'Відправити повідомлення'; //Заголовок сообщения
    $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Імя: '.$_POST['name'].'</p>
                        <p>Почта: '.$_POST['phone'].'</p>                        
                    </body>
                </html>'; //Текст нащего сообщения можно использовать HTML теги
    $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
    $headers .= "From: Отправитель <from@example.com>\r\n"; //Наименование и почта отправителя
    mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
}
?>