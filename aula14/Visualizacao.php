<?php
require_once 'Gafanhoto.php';
require_once 'Video.php';
class Visualizacao {
    private $espectador;
    private $filme;
    function __construct($espectador, $filme) {
        $this->espectador = $espectador;
        $this->filme = $filme;
        $this->filme->setViews($this->filme->getViews() + 1);
        $this->espectador->setTotAssistido($this->espectador->getTotAssistido() + 1);
    }

    public function avaliar() {
        echo "<p>".$this->espectador->getNome()." achou muito bom</p>";
    }
    public function avaliarNota($nota) {
        echo "<p>".$this->espectador->getNome()." deu nota ".$nota."</p>";
    }
    public function avaliarPorcentagem($percent) {
        echo "<p>".$this->espectador->getNome()." acha que de 0 a 100 por cento"
                . " esse vídeo é ".$percent."%</p>";
    }
    function getEspectador() {
        return $this->espectador;
    }

    function getFilme() {
        return $this->filme;
    }

    function setEspectador($espectador) {
        $this->espectador = $espectador;
    }

    function setFilme($filme) {
        $this->filme = $filme;
    }


}
