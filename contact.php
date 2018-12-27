<?php
$to = "kc2suave.com@domainsbyproxy.com";
$name = $_POST['name'];
$email = $_POST['email']
$subject = $_POST['Subject'];
$message = $_POST['Message'];

mail($to,$name,$email,$subject,$message);
?>
