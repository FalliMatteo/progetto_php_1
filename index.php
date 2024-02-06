<?php
    function __autoload($class){
        require_once("classes/$class.php");
    }

    $studenti = array(new Studente("Alessandro", "Gonzalez", 19, "CF1", "5Dia"), new Studente("Ryan", "Moh'd", 18, "CF2", "5Dia"), new Studente("Alessio", "Didilescu", 18, "CF3", "5Dia"));

    foreach($studenti as $studente){
        echo $studente->toString() . "<br>";
        echo $studente->doHomework();
    }
?>