<?php
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "info@metaform.ru";
    $date = date("d.m.Y");
    $time = date ("h:i");
    $from = $email;
    $subject = "Заявка с сайта metaform.ru";

    $msg="
    Дата: $date /n
    Время: $time /n
    Имя: $name /n
    E-mail: $email /n
    Телефон: $phone /n
    Сообщение: $message";
    mail($to, $subject, $msg, "From: $from ");
?>

<div><img src="/img/success1.png" alt=""></div>