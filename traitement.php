<?php
$erreur = false;
if(empty($_GET["cgu"])){
    echo "Merci de bien vouloir cocher les CGU";
}else{
    echo "Merci, ".$_GET['nom']." ".$_GET['prenom'].",
Nous allons prendre contact avec vous rapidement.<br>
Cordialement";
    mail($_GET["mail"], "Contact via le site","".$_GET['nom']." ".$_GET['prenom']."t'a envoyé un message.<br> 
    ".$_GET["message"]."");
}

?>