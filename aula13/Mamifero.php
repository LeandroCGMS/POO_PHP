<?php
require_once 'Animal.php';
class Mamifero extends Animal {
    protected $corPelo;
    public function emitirSom() {
        echo "<p>Som de Mamífero</p>";
    }
    
    public function alimentar() {
        
    }

    public function locomover() {
        
    }
    function getCorPelo() {
        return $this->corPelo;
    }

    function setCorPelo($corPelo) {
        $this->corPelo = $corPelo;
    }



}
