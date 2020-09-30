<?php
$to = "vueadmin-3b1f69@inbox.mailtrap.io";
$from = $user->document.getElementById('email');
$subject = "My subject";
$txt = $text->document.getElementById('message');
$headers = "From: webmaster@example.com" . "\r\n" ."CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);
?>