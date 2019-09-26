<?php
    if(isset($_POST['submit'])){
        //переменные с формы
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $phone = htmlspecialchars($_POST['phone']);
        $message = htmlspecialchars($_POST['message']);

        //от кого приходят и кому приходят письма
        $from = 'dan@openstart.ru';
        $to = $email;
        $message_to_my_email = "Было отправлено сообщение с сайта!
        Имя отправителя: $name 
        E-mail: $email 
        Номер телефона: $phone 
        Текст сообщения: $message " ;
        //шаблон регулярного выражения для телефона
        /*$exp = '/\+?7-?([0-9]{3})-?([0-9]{3})-?(([0-9]{2})|([0-9]{3}))-?(([0-9]{2})|([0-9]{4}))/';
        $digits = preg_match_all( "/[0-9]/", $phone );*/

       /* if (!preg_match($exp, $phone))
        {
            echo("Неверный формат номера");
        }*/
        $headers = "From: $from";
        //mail($to, $headers, $message_to_my_email,  $from );
        //echo "<meta http-equiv='refresh' content='0'>";


    }
/*$redirect = isset($_SERVER['HTTP_REFERER'])? $_SERVER['HTTP_REFERER']:'form.php';
header("Location: $redirect");
exit();*/
/*if(isset($_SERVER['HTTP_REFERER'])){
    $redirect = $_SERVER['HTTP_REFERER'];
}else{
    $redirect = 'form.php';
}
header("Location: $redirect");
exit();*/
?>