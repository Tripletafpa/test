<?php
    class personnage{ //objet

        //proprietes ou attributs
        public $vie = 80;
        public $atk = 20;
        public $nom;



        //methodes ou fonctions
        public function crier(){

            echo 'leroyyyyy jenkins';
        }

        public function potionVie(){

            $this->vie = 100;  //le this prend en compte l'intance en cours ici il s'agit de personnage
        
        }

        public function __construct($nom){
            $this->nom = $nom;
        }

        public function mort(){
            return $this->vie >= 0;
        }
        
        public function epee(){
            $this->vie = 0;
        }

    }






?>