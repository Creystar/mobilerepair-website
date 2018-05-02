<meta http-equiv='refresh' content='1; url=http://restore-rnd.ru'>
<meta charset="UTF-8" />
<?php
if (isset($_POST['name'])) {$name = $_POST['name']; if ($name == '') {unset($name);}}
if (isset($_POST['email'])) {$email = $_POST['email']; if ($email == '') {unset($email);}}
if (isset($_POST['phone'])) {$phone = $_POST['phone']; if ($phone == '') {unset($phone);}}
if (isset($_POST['message'])) {$message = $_POST['message']; if ($message == '') {unset($message);}}
  
if (isset($name) && isset($email) && isset($phone) && isset($message)){
  
$address = "Islawka1@yandex.ru";
$mes = "Имя: $name \nE-mail: $email \nТелефон: $phone \nТекст: $message";
$send = mail ($address,$phone,$mes,"Content-type:text/plain; charset = UTF-8\r\nFrom:$name");
if ($send == 'true')
{echo "Сообщение отправлено";}
else {echo "Ой, что-то пошло не так";}
  
}
else
{
echo "Заполните все поля";
}
?>
