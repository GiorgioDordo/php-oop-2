<?php
require_once __DIR__ . "/products/SingleProducts/DogHouseLetters.php";
require_once __DIR__ . "/products/SingleProducts/PetsFood.php";
require_once __DIR__ . "/products/SingleProducts/Toys.php";
require_once __DIR__ . "/products/Animal.php";
require_once __DIR__ . "/products/Products.php";

$dog = new Animal("Dog");
$cat = new Animal("Cat");

$product_1 = new Food ("https://picsum.photos/200/300", 5.99 , $dog, "Royal Canin Maxi Puppy Crocchette per cane", 
"Nuova ricetta! Crocchette Royal Canin Maxi Puppy per cuccioli di tg grande (2-15 mesi), ideali nella fase di crescita, 
supportano il sistema immunitario e favoriscono l'equilibrio della flora intestinale.", "proteine di pollame disidratate, 
farina di mais, riso, proteine di maiale disidratate*, grassi animali, mais, glutine di frumento*, farina di frumento, 
proteine animali idrolizzate, sali minerali, polpa di barbabietola, glutine di mais, fibre vegetali, olio di soia, olio di pesce, 
frutto-oligosaccaridi, tegumento e semi di psillio, lieviti idrolizzati (fonte di mannano-oligosaccaridi e beta-glucani) (0,30%), 
olio di alghe Schizochytrium sp. (fonte di DHA), succo di yucca schidigera, farina di tagete, glucosammina da fermentazione, idrolizzato 
di cartilagine (fonte di condroitina).", "100g", "ROYAL CANIN" );

$product_2 = new HouseLetters ("https://arcaplanet.vtexassets.com/arquivos/ids/225622/p-a-y--canile-eco-lodge-medium.jpg?v=637454754161230000", 89.99 , $dog, "Cuccia esterna per Cani Eco Lodge", 
"La cuccia per cani Eco Lodge Pet Around You è la cuccia ideale proteggere il tuo amico a quattro zampe dalle fredde serate invernali. I particolari sono realizzati con materiali atossici e 
minuziosamente studiati per evitare zone pericolose, sia all’interno che all’esterno della cuccia. Il fondo presenta una lieve bombatura e dei canali di scolo che evitano eventuali ristagni di liquidi. 
Le forme morbide rendono la pulizia agevole ovunque; le due finestre sulle pareti laterali permettono una buona aerazione. Ralizzata con materiali 100% riciclati e made in Italy la cuccia per cani Eco Lodge 
è ecofriendly, unica per l’igiene, per la robustezza, per la praticità e per l’innovativo ed elegante design. Prodotto disponibile in 3 diverse misure prendendo il tetto come riferimento: Cuccia Mini: 60x50x41h cm; 
Cuccia Media: 79x56x60h cm; Cuccia Large: 99x70x75h cm (misure della porticina d'ingresso: 43.5 altezza X25 lunghezza X28 larghezza).", " Eco Lodge", "Cuccia Mini: 60x50x41h cm" );

$product_3 = new Toys ("https://picsum.photos/200/300", 12.99 , $dog, "Royal Canin Maxi Puppy Crocchette per cane", 
"Nuova ricetta! Crocchette Royal Canin Maxi Puppy per cuccioli di tg grande (2-15 mesi), ideali nella fase di crescita, 
supportano il sistema immunitario e favoriscono l'equilibrio della flora intestinale.", "proteine di pollame disidratate, 
farina di mais, riso, proteine di maiale disidratate*, grassi animali, mais, glutine di frumento*, farina di frumento, 
proteine animali idrolizzate, sali minerali, polpa di barbabietola, glutine di mais, fibre vegetali, olio di soia, olio di pesce, 
frutto-oligosaccaridi, tegumento e semi di psillio, lieviti idrolizzati (fonte di mannano-oligosaccaridi e beta-glucani) (0,30%), 
olio di alghe Schizochytrium sp. (fonte di DHA), succo di yucca schidigera, farina di tagete, glucosammina da fermentazione, idrolizzato 
di cartilagine (fonte di condroitina).");

?>