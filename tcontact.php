<?php
require 'cfcontact.php';
if(isset($_POST['submit']))
{    
    $objet = new cfcontact;
    $objet->contact($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['message']);
}
?>