<?php
$to = "hello@gaslightsoftware.com"; 
$subject = "[GASLIGHT] Contact form submission";
$date = date ("l, F j, Y"); 
$time = date ("h:i A"); 

$msg = <<<MSG
The following information was submitted via the website contact form on
$date at $time:

"{$_POST['from']}" <{$_POST['contact']}> said:

{$_POST['message']}

User Agent: {$_SERVER['HTTP_USER_AGENT']}
Remote Address: {$_SERVER['REMOTE_ADDR']}
MSG;

mail($to, $subject, $msg); 
header("Location:thankyou.html"); 

?>