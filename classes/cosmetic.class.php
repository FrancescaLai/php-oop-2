<?php

class ProdottoCosmetico extends Prodotto
{
   // attributi e/o proprietà 
    public $formato;

    public function __construct($_modello, $_brand, $_id, $_prezzo, $_categoria, $_colore, $_formato){
    
        parent::__construct($_modello, $_brand, $_id, $_prezzo, $_categoria, $_colore);
    
    $this->formato = $_formato;
   }   
}

?>