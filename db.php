<?php
require_once __DIR__ . "/products/SingleProducts/DogHouseLetters.php";
require_once __DIR__ . "/products/SingleProducts/PetsFood.php";
require_once __DIR__ . "/products/SingleProducts/Toys.php";
require_once __DIR__ . "/products/Animal.php";
require_once __DIR__ . "/products/Products.php";

$dog = new Animal("Dog");
$cat = new Animal("Cat");

$product_1 = new Food (Food::$product_category,"https://picsum.photos/200/300", 5.99 , $dog, "Royal Canin Maxi Puppy Crocchette per cane", 
"Nuova ricetta! Crocchette Royal Canin Maxi Puppy per cuccioli di tg grande (2-15 mesi), ideali nella fase di crescita, 
supportano il sistema immunitario e favoriscono l'equilibrio della flora intestinale.", "proteine di pollame disidratate, 
farina di mais, riso, proteine di maiale disidratate*, grassi animali, mais, glutine di frumento*, farina di frumento, 
proteine animali idrolizzate, sali minerali, polpa di barbabietola, glutine di mais, fibre vegetali, olio di soia, olio di pesce, 
frutto-oligosaccaridi, tegumento e semi di psillio, lieviti idrolizzati (fonte di mannano-oligosaccaridi e beta-glucani) (0,30%), 
olio di alghe Schizochytrium sp. (fonte di DHA), succo di yucca schidigera, farina di tagete, glucosammina da fermentazione, idrolizzato 
di cartilagine (fonte di condroitina).", "100g", "ROYAL CANIN" );

$product_2 = new HouseLetters (HouseLetters::$product_category,"https://picsum.photos/200/300", 5.99 , $dog, "Royal Canin Maxi Puppy Crocchette per cane", 
"Nuova ricetta! Crocchette Royal Canin Maxi Puppy per cuccioli di tg grande (2-15 mesi), ideali nella fase di crescita, 
supportano il sistema immunitario e favoriscono l'equilibrio della flora intestinale.", "proteine di pollame disidratate, 
farina di mais, riso, proteine di maiale disidratate*, grassi animali, mais, glutine di frumento*, farina di frumento, 
proteine animali idrolizzate, sali minerali, polpa di barbabietola, glutine di mais, fibre vegetali, olio di soia, olio di pesce, 
frutto-oligosaccaridi, tegumento e semi di psillio, lieviti idrolizzati (fonte di mannano-oligosaccaridi e beta-glucani) (0,30%), 
olio di alghe Schizochytrium sp. (fonte di DHA), succo di yucca schidigera, farina di tagete, glucosammina da fermentazione, idrolizzato 
di cartilagine (fonte di condroitina).", "Dog House", "200x200cm" );

$product_3 = new Toys (Toys::$product_category,"https://picsum.photos/200/300", 5.99 , $dog, "Royal Canin Maxi Puppy Crocchette per cane", 
"Nuova ricetta! Crocchette Royal Canin Maxi Puppy per cuccioli di tg grande (2-15 mesi), ideali nella fase di crescita, 
supportano il sistema immunitario e favoriscono l'equilibrio della flora intestinale.", "proteine di pollame disidratate, 
farina di mais, riso, proteine di maiale disidratate*, grassi animali, mais, glutine di frumento*, farina di frumento, 
proteine animali idrolizzate, sali minerali, polpa di barbabietola, glutine di mais, fibre vegetali, olio di soia, olio di pesce, 
frutto-oligosaccaridi, tegumento e semi di psillio, lieviti idrolizzati (fonte di mannano-oligosaccaridi e beta-glucani) (0,30%), 
olio di alghe Schizochytrium sp. (fonte di DHA), succo di yucca schidigera, farina di tagete, glucosammina da fermentazione, idrolizzato 
di cartilagine (fonte di condroitina).");

?>