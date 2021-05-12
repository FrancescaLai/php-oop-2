<?php

// L'esercizio di oggi consiste nello sperimentare i concetti visti insieme di Ereditarietà e Poliformismo creando una superclasse Prodotto 
// e almeno una sottoclasse che faccia riferimento ad un prodotto specifico (es. prodotto di cosmetica o articolo informatico) 
// di un ipotetico sito e-commerce.

class Prodotto {
    // attributi e/o proprietà
    public $nome;
    public $brand;
    public $id;
    public $prezzo;

    //costruttore
    public function __construct($_nome, $_brand, $_id, $_prezzo)
    {
        $this->nome = $_nome;
        $this->brand = $_brand;
        $this->id = $_id;
        $this->prezzo = $_prezzo;
    }

    public function getBasicInfo()
    {
      return $this->nome . " " . $this->brand . " " . $this->id . " " . $this->prezzo;
    }
}

class ProdottoCosmetico extends Prodotto
{
   // attributi e/o proprietà 
   public $categoria;
   public $colore;
   public $formato;

   public function __construct($_nome, $_brand, $_id, $_prezzo, $_categoria, $_colore, $_formato){
    $this->nome = $_nome;
    $this->brand = $_brand;
    $this->id = $_id;
    $this->prezzo = $_prezzo;
    $this->categoria = $_categoria;
    $this->colore = $_colore;
    $this->formato = $_formato;
   }

   
}



$rossetto = new ProdottoCosmetico('Toasted', 'Espressoh', 'esprabc123', '19.00', 'cosmetica', 'rosso', 'viaggio');

echo "Scheda tecnica del prodotto {$rossetto->nome}: " . "<br>";
echo "Brand: {$rossetto->brand}" . "<br>" . "ID: {$rossetto->id}" . "<br>" . "Prezzo: {$rossetto->prezzo} €" . "<br>";
echo "Categoria merceologica: {$rossetto->categoria}" . "<br>" . "Colore: {$rossetto->colore}" . "<br>" . "Formato: {$rossetto->formato}";


?>


