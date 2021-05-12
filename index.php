<?php

// L'esercizio di oggi consiste nello sperimentare i concetti visti insieme di Ereditarietà e Poliformismo creando una superclasse Prodotto 
// e almeno una sottoclasse che faccia riferimento ad un prodotto specifico (es. prodotto di cosmetica o articolo informatico) 
// di un ipotetico sito e-commerce.

class Prodotto {
    // attributi e/o proprietà
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

class ProdottoCosmetico extends Prodotto
{
   // attributi e/o proprietà 
    public $formato;

    public function __construct($_modello, $_brand, $_id, $_prezzo, $_categoria, $_colore, $_formato){
    
        parent::__construct($_modello, $_brand, $_id, $_prezzo, $_categoria, $_colore);
    
    $this->formato = $_formato;
   }   
}

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



$rossetto = new ProdottoCosmetico('Toasted', 'Espressoh', 'esprabc123', '19.00', 'cosmetica', 'rosso', 'viaggio');

$jeans = new ProdottoAbbigliamento('501', 'Levis', 'levis501abc', '79.00', 'abbigliamento', 'nero', '27', 'cotone');


echo "Scheda tecnica del prodotto {$rossetto->modello}: " . "<br>";
echo "Brand: {$rossetto->brand}" . "<br>" . "ID: {$rossetto->id}" . "<br>" . "Prezzo: {$rossetto->prezzo} €" . "<br>";
echo "Categoria merceologica: {$rossetto->categoria}" . "<br>" . "Colore: {$rossetto->colore}" . "<br>" . "Formato: {$rossetto->formato}" . "<br>";

echo "{$jeans->getBasicInfo()} {$jeans->getAdditionalInfo()}";
?>


