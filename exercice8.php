<?php
/*
 * ÉNONCÉ :
 * Créez une classe Invoice avec les propriétés protected number, client, items (tableau associatif avec description et montant).
 * Ajoutez les méthodes pour ajouter un item, calculer le total, et afficher la facture.
 * Instanciez une facture, ajoutez des items et affichez-la.
*/

class Invoice
{
    protected string $numero;
    protected string $client;
    protected array $items = [];

    public function __construct(string $numero, string $client)
    {
        $this->numero = $numero;
        $this->client = $client;
    }

    public function ajouterItem($description, $montant)
    {
        $this->items[] = ['description' => $description, 'montant' => $montant];
    }

    public function calculerTotal(): float
    {
        $t = 0;
        foreach ($this->items as $item)
        {
            $t += $item['montant'];
        }
        return $t;
    }

    public function afficherFacture()
    {
        echo "Facture n°" . $this->numero . "<br>";
        echo "Client : " . $this->client . "<br>";
        echo "<br>";
        foreach ($this->items as $item)
        {
            echo "- " . $item['description'] . " : " . $item['montant'] . " €<br>";
        }
        echo "<br>";
        echo "Total : " . $this->calculerTotal() . " €<br>";
    }
}

$facture = new Invoice("1815054", "Jean Nugue");
$facture->ajouterItem("web", 49.99);
$facture->ajouterItem("Ndd", 12.00);
$facture->ajouterItem("ssl", 29.99);
$facture->afficherFacture();