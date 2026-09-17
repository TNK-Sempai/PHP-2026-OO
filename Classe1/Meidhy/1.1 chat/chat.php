<?php

// Classe1\Meidhy\1.1 chat\chat.php

class chat{
    // proprités 
    public string $nom = "Sans nom";
    public int $age = 0;

    // Méthodes 
    public function miauler():string 
    {
        return "Miaou !";
    }

    // Constructeur est appelé dès le mots clefs
    public function __construct(string $nom, int $age)
    {
        this->nom = $nom 
        this->age = $age
    }

    public function sePrenter():string
    {
        return 'Je suis' .this->nom . ' et j\'ai ' . this->age . ' ans.'; 
    }
}

