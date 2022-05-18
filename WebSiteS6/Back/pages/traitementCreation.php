<?php
require ('../../Front/inc/functions.php');
$site_url="http://localhost/WebSiteS6/Front/";

		$target_dir = $site_url."assets/img/";
		if(isset($_FILES['image'])){
		      $errors= array();
		      $file_name = $_FILES['image']['name'];
		      $file_size = $_FILES['image']['size'];
		      $file_tmp = $_FILES['image']['tmp_name'];
		      $file_type = $_FILES['image']['type'];
		      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
		      
		      $extensions= array("jpeg","jpg","png");
		      
		      if(in_array($file_ext,$extensions)=== false){
		         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
		      }
		      
		      if($file_size > 2097152) {
		         $errors[]='File size must be excately 2 MB';
		      }
		      
		      if(empty($errors)==true) {
		         move_uploaded_file($file_tmp,$target_dir.$file_name);
		         //echo "Success";
		      }else{
		         print_r($errors);

		      }
   }
		
		$titre = $_POST['titre'];
		$date = $_POST['date'];
		$categorie = $_POST['categorie'];
		$pays = $_POST['pays'];
		$image = $_FILES["image"]["name"];
		$resume = $_POST['resume'];
		$contenu = $_POST['contenu'];



	  	insertPublication($pays,$categorie,$titre,$resume,$contenu,$image,$date);
	  	
		header('Location: creation.php');





	if (isset($_GET['suppr'])){
		$id = $_GET['suppr'];
		supprimerPublication($id);
		header('Location: creation.php');
	}

	
	
	
	
	

?>