<?php

class ProdottoAbbigliamento extends Prodotto
{
    public $taglia;
    public $composizione;

    public function __construct($_modello, $_brand, $_id, $_prezzo, $_categoria, $_colore, $_taglia, $_composizione){
    
        parent::__construct($_modello, $_brand, $_id, $_prezzo, $_categoria, $_colore);

        $this->taglia = $_taglia;
        $this->composizione = $_composizione;
    }

    public function getAdditionalInfo(){
        return $this->taglia . " " . $this->composizione;
    }
}

?>