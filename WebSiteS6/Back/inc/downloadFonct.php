<?php 
$url = 'D:\Mishael\Motivation\TIBO INSHAPE - EXTRÊME MOTIVATION.mp4'; 
$fichier_nom = basename($url);
$fichier_contenu = file_get_contents($url);
$dossier_enregistrement = "../telechargement/";

if(file_put_contents($dossier_enregistrement . $fichier_nom, $fichier_contenu)) 
{ 
    echo "Fichier téléchargé avec succès"; 
} 
else 
{ 
    echo "Fichier non téléchargé"; 
} 
?> 