<?php
/*
 * ÉNONCÉ :
 * Importer votre classe Book de l'exercice 1.
 * Créez une classe Library qui gère un tableau de livres (Book).
 * Ajoutez une méthode pour ajouter un livre,
 * Ajouter une méthode pour afficher tous les livres
 * Ajouter une méthode pour compter le nombre de livres.
 * Instanciez une bibliothèque, ajoutez des livres et affichez-les.
 * Afficher le nombre total de livres dans la bibliothèque.
*/
require_once 'exercice1.php';

class Library
{
    protected array $livres = [];

    public function ajouterLivre(Book $livre)
    {
        $this->livres[] = $livre;
    }

    public function afficherLivres()
    {
        foreach ($this->livres as $livre)
        {
            $livre->afficherInfos();
            echo "<br>";
        }
    }

    public function compterLivres(): int
    {
        return count($this->livres);
    }
}

$biblio = new Library();
$biblio->ajouterLivre(new Book("1999", "jean jean", 8.90));
$biblio->ajouterLivre(new Book("joujou", "ji ji", 11.50));
$biblio->ajouterLivre(new Book("jaja", "jijiau", 9.20));

$biblio->afficherLivres();
echo "Nombre de livres : " . $biblio->compterLivres();