<?php
/*
 * ÉNONCÉ :
 * Créez une classe Book avec les propriétés protected title, author, et price.
 * Ajoutez une méthode displayInfo() qui affiche les informations du livre.
 * Instanciez un livre et affichez ses informations.
*/

class Book
{
    protected string $titre;
    protected string $auteur;
    protected float $prix;

    public function __construct(string $titre, string $auteur, float $prix)
    {
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->prix = $prix;
    }

    public function displayInfo()
    {
        echo "Titre : " . $this->titre . "<br>";
        echo "Auteur : " . $this->auteur . "<br>";
        echo "Prix : " . $this->prix . " €<br>";
    }
}

$livre = new Book("le petit chien", "vroumm vroumm ", 12.50);
$livre->displayInfo();