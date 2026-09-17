<?php

// 01-Exemple.php 
// La class est écrite en PascalCase 
// elle n'est pas un objet en tant que tel 
// Mais plutot une fabrique à créer des objects 
class MyFirstClass{
    // Propriétés (variables de la classe), plus souvent du camelCase
        // Public (accessible et modifiable en dehors de la classe )
        public string $name; 
        // private (accessible et modifiable que dans la classe ou son instance)
        private string $surName= ''; 
        // Protected (accessible et modifiable que dans la classe ou son isntance et/ou dans ses enfants => "héritage")
        protected ?int $identifiant = null; // null ou int ?int

    // Constantes (conteneurs invariables de la classe)
    const IS_ALIVE = true; // par défaut publique, typage autorisé à partir de php 8.3

    // Méthodes (fonctions de la classe)
        // Constructeur => passer des arguments à l'instance de classe 
        // est toujours public et utilise la méthode magique __construct(argument)
        // est invoqué lors de l'instanciation (new)
        public function __construct()
        {
            //self::class représente le nom de la class donc de la fabrique
            echo "on a crée un instance de ".self::class; 
        }
    };

    // instantciation de $first
$first = new MyFirstClass(); 
echo "<hr>"; 
// appel d'une constante de classe 
// echo $first::IS_ALIVE; // partir de l'instance n'est pas recommandé 
echo MyFirstClass::IS_ALIVE; 
var_dump($first);
