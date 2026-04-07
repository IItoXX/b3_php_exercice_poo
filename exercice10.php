<?php
/*
 * ÉNONCÉ :
 * Le code ci-dessous n'est pas orienté objet (que des fonctions).
 * Refactorisez ce code en créant une classe ShoppingCart avec des méthodes équivalentes.
 */

class ShoppingCart
{
    protected array $panier = [];

    public function ajouterArticle($nom, $prix)
    {
        $this->panier[] = ['nom' => $nom, 'prix' => $prix];
    }

    public function getTotal(): float
    {
        $total = 0;
        foreach ($this->panier as $article)
        {
            $total += $article['prix'];
        }
        return $total;
    }

    public function afficherPanier()
    {
        foreach ($this->panier as $article)
        {
            echo $article['nom'] . " : " . $article['prix'] . " €<br>";
        }
    }
}

$panier = new ShoppingCart();
$panier->ajouterArticle("un chien", 12.5);
$panier->ajouterArticle("un raton laveur", 2.3);
$panier->afficherPanier();
echo "Total : " . $panier->getTotal() . " € (très chère pour des bestioles)";