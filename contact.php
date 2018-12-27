<?php
$to = "kc2suave.com@domainsbyproxy.com";
$name = $_POST['name'];
$email = $_POST['email']
$subject = $_POST['subject'];
$message = ['message'];

mail($to,$name,$email,$subject,$message);
?>
