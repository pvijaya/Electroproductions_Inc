<?php
header('Location: http://ella.ils.indiana.edu/~pvijaya'); 
$header = "Reply-to: Electro Productions. <ryan@electroproductions.com>\r\n";
$header .= "Return-Path: Electro Productions. <ryan@electroproductions.com>\r\n";
$header .= "From: Electro Productions <ryan@electroproductions.com>\r\n";
$header .= "Organization: Electro Productions\r\n";
$header .= "Content-Type: text/plain\r\n";


$mailMessage01 = <<<EOD
An information request has been received.\r\n
\r\n
First Name:  {$_REQUEST['name']}\r\n
Email: {$_REQUEST['email']}\r\n
Phone: {$_REQUEST['phone']}\r\n
Message: {$_REQUEST['message']}\r\n
EOD;

$mailMessage02 = <<<EOD
Your submission has been received by Ryan Juszkiewicz.Here is the information you submitted.\r\n
\r\n
First Name:  {$_REQUEST['name']}\r\n
Email: {$_REQUEST['email']}\r\n
Phone: {$_REQUEST['phone']}\r\n
Message: {$_REQUEST['message']}\r\n
EOD;

mail("ryan@electroproductions.com", "Enquiry Message from {$_REQUEST['email']}", $mailMessage01, $header);
mail($_REQUEST['email'], "Your Application has been Sent", $mailMessage02, $header)
?>