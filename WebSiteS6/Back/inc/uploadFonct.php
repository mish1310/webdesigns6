<?php
if ($_FILES['mon_fichier']['error']) {
  switch ($_FILES['mon_fichier']['error']){
    case 1: // UPLOAD_ERR_INI_SIZE
      echo "Le fichier dépasse la limite autorisée par le serveur (fichier php.ini) !";
      break;
    case 2: // UPLOAD_ERR_FORM_SIZE
      echo "Le fichier dépasse la limite autorisée dans le formulaire HTML !";
      break;
    case 3: // UPLOAD_ERR_PARTIAL
      echo "L'envoi du fichier a été interrompu pendant le transfert !";
      break;
    case 4: // UPLOAD_ERR_NO_FILE
      echo "Le fichier que vous avez envoyé a une taille nulle !";
      break;
  }
}else{
  // $_FILES['mon_fichier']['error'] vaut 0 soit UPLOAD_ERR_OK
  // ce qui signifie qu'il n'y a eu aucune erreur
	//echo "mande";
  $typeFichier = $_FILES['mon_fichier']['type'];
  $nomFichier = $_FILES['mon_fichier']['name'];
  $description = $_POST['description'];
  var_dump($typeFichier);
  var_dump($nomFichier);
  var_dump($description);
}
?>