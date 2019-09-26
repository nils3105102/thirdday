<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
</head>
<body>
<noscript>
<form action="" method="post">
    Ваше имя <input type="text" name="name" placeholder="Enter name" required><br>
    Email:   <input type="text" name="email" placeholder="Enter your Email" pattern="^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}$" required><br>
    Номер телефона: <input type="text" name="phone" placeholder="Enter phone number" pattern="\+?7-?([0-9]{3})-?([0-9]{3})-?(([0-9]{2})|([0-9]{3}))-?(([0-9]{2})|([0-9]{4}))" required><br>
    Сообщение:<br><textarea rows="5" name="message" cols="30" required></textarea><br>
    <input type="submit" name="submit" value="Отправить">
</form>

    <?php
require_once 'send.php';
if(mail($to, $headers, $message_to_my_email,  $from )){
    echo "Сообщение отправлено!";
}
?>
</noscript>

<button id="button" class="ui-state-default ui-corner-all">Форма</button>
<script>

</script>
</body>
</html>