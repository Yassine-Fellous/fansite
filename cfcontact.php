<?php
session_start();
require "database.php";

class cfcontact extends database{

    public function contact($_nom, $_prenom, $_email, $_message){
        

        function secuData($data){

            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            $data = htmlentities($data);
    
            return  $data;
        }
        
        $db = $this->bdd;


        $nom = secuData($_nom);
        $prenom = htmlspecialchars($_prenom);
        $email = htmlspecialchars($_email);
        $message = htmlspecialchars($_message);


        
        if (!empty($_nom) && !empty($_prenom) && !empty($_email) && !empty($_message) ) {
        

            $insertinto = $db->prepare("INSERT INTO contact(nom, prenom, email, message) VALUES(?, ?, ?, ?)");
            $insertinto->execute(array($nom, $prenom, $email, $message));
            header('Location:contact.php');
            unset($_SESSION['fail']);
            $_SESSION['mess']="<font color='blue'>Message envoyer !!!</font>";

        }
        else{
            $_SESSION['mess']="<font color='blue'> Champs manquants !!!</font>";
            header('Location:contact.php');
        }

    }
}
?>