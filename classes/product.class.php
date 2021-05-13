<?php


class Prodotto {
    // attributi e/o proprietà (le lascio public altrimenti non posso usarle singolarmente nei vari paragrafi ma 
    // avrebbe senso metterle protected e poi usarle/trasformarle tramite le funzioni/constructur che sono public)
    public $modello;
    public $brand;
    public $id;
    public $prezzo;
    public $categoria;
    public $colore;

    //costruttore
    public function __construct($_modello, $_brand, $_id, $_prezzo, $_categoria, $_colore)
    {
        $this->modello = $_modello;
        $this->brand = $_brand;
        $this->id = $_id;
        $this->prezzo = $_prezzo;
        $this->categoria = $_categoria;
        $this->colore = $_colore;
        
    }

    public function getBasicInfo()
    {
      return $this->modello . " " . $this->brand . " " . $this->id . " " . $this->prezzo . " " . $this->categoria . " " . $this->colore;
    }
}
?>