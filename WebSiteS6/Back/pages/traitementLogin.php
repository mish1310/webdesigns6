<?php 
	$login=$_POST['login'];
	$mdp=$_POST['mdp'];
	require ('../../Front/inc/functions.php');
	$verif = verifAccount($login,$mdp);
	$id=0;
	
	while ($res = mysqli_fetch_assoc($verif)) {
		$id = $res['idPersonnel'];
	}
	
	if($id > 0)
	{
		header('Location: creation.php');	
	}
	else header('Location: login.php?res=1');
?>