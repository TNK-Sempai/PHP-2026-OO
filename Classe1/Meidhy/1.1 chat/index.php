<?php

//Classe1\Meidhy\1.1 chat\index.php

//appel de la classe 
require_once "chat.php"; 

// instanciation d'un chat, attends 2 arguments dès la création du constructeur 1.4 
$chat = new chat("Tom", 5); 

// affichage de propriétés publiques 
echo "Nom : $chat->nom | Age : $chat->age <br>";

// Les propriétés publiques sont modifiables depuis l'extérieur de la classe 
$chat->nom = "Félix"; 
$chat->age = 3;

echo "Nom : $chat->nom | Age : $chat->age <br>";

// appel d'un fonction public 
echo "Nom : $chat->nom | Age : $chat->age | fait : {$chat->miauler()}<br>";


// appel d'une autre méthode publique qui affiche des propriétés 
echo $chat->sePrenter(). "<br>" ; 

// 1.4 
$chat2 = new chat(
    age : 4,
    nom : 'Jacques'
); 

echo $chat2->sePresenter(). "<br>"; 