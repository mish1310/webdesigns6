<?php 
	$nom=$_POST['nom'];
	$mail=$_POST['mail'];
	$sujet=$_POST['sujet'];
	$message=$_POST['message'];

	$site_url="http://localhost/WebSiteS6/Front/";
	require ('../inc/functions.php');

	insertMessage($nom,$mail,$sujet,$message);
	header('Location: contact.php');
?>