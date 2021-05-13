<?php

// L'esercizio di oggi consiste nello sperimentare i concetti visti insieme di Ereditarietà e Poliformismo creando una superclasse Prodotto 
// e almeno una sottoclasse che faccia riferimento ad un prodotto specifico (es. prodotto di cosmetica o articolo informatico) 
// di un ipotetico sito e-commerce.

require_once __DIR__ . '/classes/product.class.php';
require_once __DIR__ . '/classes/cosmetic.class.php';
require_once __DIR__ . '/classes/clothing.class.php';


$rossetto = new ProdottoCosmetico('Toasted', 'Espressoh', 'esprabc123', '19.00', 'cosmetica', 'rosso', 'viaggio');

$jeans = new ProdottoAbbigliamento('501', 'Levis', 'levis501abc', '79.00', 'abbigliamento', 'nero', '27', 'cotone');


// Stessa cosa di quanto scritto sotto nell'html: 

// echo "Brand: {$rossetto->brand}" . "<br>" . "ID: {$rossetto->id}" . "<br>" . "Prezzo: {$rossetto->prezzo} €" . "<br>";
// echo "Categoria merceologica: {$rossetto->categoria}" . "<br>" . "Colore: {$rossetto->colore}" . "<br>" . "Formato: {$rossetto->formato}" . "<br>";
// echo "{$jeans->getBasicInfo()} {$jeans->getAdditionalInfo()}"; 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classi Prodotti</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Prodotti Disponibili</h1>

    <div class="prodotti">
        <div class="scheda-prodotto cosmetica">
            <h3><?php echo "Scheda tecnica del prodotto $rossetto->modello:" ?></h3>
            <p>Brand: <span><?php echo "$rossetto->brand" ?></span> </p>
            <p>ID: <span><?php echo "$rossetto->id" ?></span> </p>
            <p>Prezzo: <span><?php echo "$rossetto->prezzo" ?> €</span> </p>
            <p>Categoria Mercelogica: <span><?php echo "$rossetto->categoria" ?></span> </p>
            <p>Colore: <span><?php echo "$rossetto->colore" ?></span> </p>
            <p>Formato: <span><?php echo "$rossetto->formato" ?></span> </p>
        </div>
        <div class="scheda-prodotto abbigliamento">
            <h3><?php echo "Scheda tecnica del prodotto $jeans->modello:" ?></h3>
            <p>Brand: <span><?php echo "$jeans->brand" ?></span> </p>
            <p>ID: <span><?php echo "$jeans->id" ?></span> </p>
            <p>Prezzo: <span><?php echo "$jeans->prezzo" ?> €</span> </p>
            <p>Categoria Mercelogica: <span><?php echo "$jeans->categoria" ?></span> </p>
            <p>Colore: <span><?php echo "$jeans->colore" ?></span> </p>
            <p>Taglia: <span><?php echo "$jeans->taglia" ?></span> </p>
            <p>composizione: <span><?php echo "$jeans->composizione" ?></span> </p>
        </div>
    </div>
    
</body>
</html>

