<?php

class database {

    private $db;
    
    public function __construct()
    {
        try {
    
            $db = new PDO("mysql:host = localhost ;dbname=fansite", 'root', '');
    
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $message) {
            echo "ERREUR :" . " " . $message->getMessage();
        }
    
        $this->bdd = $db;
    }

}
