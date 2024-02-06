<?php
    class Studente extends Persona{
        private $classe;
    
        function __construct($nome, $cognome, $età, $codice_fiscale, $classe){
            parent::__construct($nome, $cognome, $età, $codice_fiscale);
            $this->classe = $classe;
        }

        function getClasse(){
            return $this->classe;
        }

        function doHomework(){
            return "L'alunno ha impiegato " . rand(3, 24)*10 . " minuti per svolgere i suoi compiti <br>";
        }

        function toString(){
            return parent::toString() . ", " . $this->classe;
        }
    }
?>