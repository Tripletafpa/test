<?php
    require 'personnage.php';

    //creation des objets les perso
    $merlin= new personnage("Merlin");
    $harry = new personnage("Harry");
    
    //execution des fonctions sur les objerts
    $merlin-> potionVie();
    $harry->mort();
    

    //restitutaion des resultats
    var_dump($merlin);
    var_dump($harry);

?>