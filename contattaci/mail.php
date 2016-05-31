<?php
	include_once '../lib/functions.php';	//Includo la mia libreria PHP
	$name = $_POST ["name"];
	$email = $_POST ["email"];
	$telephone = $_POST ["telephone"];
	$message = $_POST ["message"];
	
	$to = email;
	$subject = "MAIL FROM WEBSITE www.globalgest.mo.it";
	$message = wordwrap($message,70);
	$headers = "From: $email" . "\r\n" .
			"Telephone: $telephone" . "\r\n";
	
	$xml = new SimpleXMLElement("<?xml version=\"1.0\" encoding=\"utf-8\" ?><xml></xml}>");
	if (mail($to,$subject,$message,$headers))
	{
		$xml->addChild("error", "false");
	}
	else
	{
		$xml->addChild("error", "true");
	}
	$xml->addChild("error", "false");
?>