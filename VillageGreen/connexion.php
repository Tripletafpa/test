<?php
    function connexionBase()
    {
       // Paramètre de connexion serveur (IMPORTANT PORT ':3308' sinon cela ne fonctionnera pas dans mon cas)
       $host = "localhost:3308";
       $login= "root";  // Votre loggin d'accès au serveur de BDD 
       $password="";    // Le Password pour vous identifier auprès du serveur
       $base = "villagegreen";  // La bdd avec laquelle vous voulez travailler 

       try 
       {
            /* ouverture d'une connexion à la base de données jarditou */
            $db = new PDO('mysql:host=' .$host. ';charset=utf8;dbname=' .$base, $login, $password);
            return $db;
        } 
        catch (Exception $e) 
        {
            echo 'Erreur : ' . $e->getMessage() . '<br>';
            echo 'N° : ' . $e->getCode() . '<br>';
            die('Connexion au serveur impossible.');
        } 
    }
?>