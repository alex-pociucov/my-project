<?php
$to = "Ribbbon.Art@gmail.com";  
$tema = "Заказ Картин";  
$message = "Ваше имя: ".$_POST['name']."<br>"; 
$message .= "Номер картины: ".$_POST['id_picture']."<br>";  
$message .= "Город: ".$_POST['city']."<br>";  
$message .= "Адрес: ".$_POST['address']."<br>";
$message .= "телефон: ".$_POST['phone']."<br>";
$message .= "Индекс: ".$_POST['index']."<br>"; 
$message .= "e-mail: ".$_POST['e-mail']."<br>";   
$headers  = 'MIME-Version: 1.0' . "\r\n";  
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";  
mail($to, $tema, $message, $headers); 
// require "pay.php";
?>