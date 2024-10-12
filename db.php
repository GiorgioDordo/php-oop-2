<?php
require_once __DIR__ . "/products/SingleProducts/DogHouseLetters.php";
require_once __DIR__ . "/products/SingleProducts/PetsFood.php";
require_once __DIR__ . "/products/SingleProducts/Toys.php";
require_once __DIR__ . "/products/Animal.php";
require_once __DIR__ . "/products/Products.php";

$dog = new Animal("Dog");
$cat = new Animal("Cat");

$product_1 = new Food ("https://www.bauzaar.it/media/catalog/product/g/r/grafiche-magento-pdv-bauzaar_76_.png?store=default&image-type=image", 31.89 , $cat, "Almo Nature Holistic Maintenance Gatto con Tonno e Salmone", 
"Almo Nature Holistic Mantenimento Gatto con Tonno e Salmone è un alimento secco e completo ideali per il mantenimento di gatti adulti. 
Sono crocchette arricchite con vitamine e minerali, contengono anche la cellulosa, che facilita l'espulsione delle palle di pelo. 
Gli ingredienti di pesce nella ricetta 'tonno e salmone' sono anche una naturale fonte di omega-3, che possono aiutare ad avere un pelo sano e lucido. 
Formulata senza coloranti artificiali, la crocchetta Holistic per gatti offre una grande appetibilità ad un prezzo competitivo!", 
"Carni e derivati, cereali (riso 4%), pesci e sottoprodotti dei pesci (tonno* 8%, salmone* 8%), oli e grassi (grasso di pollo 5%), 
sottoprodotti di origine vegetale (cellulosa 0,5%, inulina di cicoria - fonte di FOS- 0,1%), lieviti, sostanze minerali.", "100g", "ALMO NATURE" );

$product_2 = new HouseLetters ("https://arcaplanet.vtexassets.com/arquivos/ids/225622/p-a-y--canile-eco-lodge-medium.jpg?v=637454754161230000", 89.99 , $dog, "Cuccia esterna per Cani Eco Lodge", 
"La cuccia per cani Eco Lodge Pet Around You è la cuccia ideale proteggere il tuo amico a quattro zampe dalle fredde serate invernali. I particolari sono realizzati con materiali atossici e 
minuziosamente studiati per evitare zone pericolose, sia all’interno che all’esterno della cuccia. Il fondo presenta una lieve bombatura e dei canali di scolo che evitano eventuali ristagni di liquidi. 
Le forme morbide rendono la pulizia agevole ovunque; le due finestre sulle pareti laterali permettono una buona aerazione. Ralizzata con materiali 100% riciclati e made in Italy la cuccia per cani Eco Lodge 
è ecofriendly, unica per l’igiene, per la robustezza, per la praticità e per l’innovativo ed elegante design. Prodotto disponibile in 3 diverse misure prendendo il tetto come riferimento: Cuccia Mini: 60x50x41h cm; 
Cuccia Media: 79x56x60h cm; Cuccia Large: 99x70x75h cm (misure della porticina d'ingresso: 43.5 altezza X25 lunghezza X28 larghezza).", " Eco Lodge", "Cuccia Mini: 60x50x41h cm" );

$product_3 = new Toys ("https://www.bauzaar.it/media/catalog/product/g/r/grafiche_prodotti_magento_600x600_-_2021-11-22t123741.271_1.png?store=default&image-type=image", 2.99  , $cat, 
"Kong Giochi Attivi per Gatti", 
"KONG Giochi Attivi per gatti sono progettati per offrire al vostro gatto una sfida variegata e consentendovi al contempo di personalizzare l’esperienza di gioco.", "gomma");
?>