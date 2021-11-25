<?php

class Database
{
    public function getConnexion(){
        try {
            //  Offline
             $dbname = "mvc";
             $username = "root";
             $password = "";
    
             $db = new PDO('mysql:host=localhost;dbname='.$dbname.';port=3306;charset=utf8', $username, $password);
            return $db;
         }
         catch(Exception $e)
         {
             die("Erreur : ".$e->getMessage());
         }
    }
}