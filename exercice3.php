<?php
/*
 * ÉNONCÉ :
 * Créez une classe BlogPost avec les propriétés protected title, content, createdAt (de type DateTime).
 * Ajoutez les getters/setters
 * Ajouter une méthode getExcerpt($length) qui retourne un extrait du contenu.
 * Instanciez un article, affichez son titre, sa date de création et un extrait de 50 caractères.
*/

class BlogPost
{
    protected string $titre;
    protected string $contenu;
    protected DateTime $dateCreation;

    public function __construct(string $titre, string $contenu)
    {
        $this->titre = $titre;
        $this->contenu = $contenu;
        $this->dateCreation = new DateTime();
    }

    public function getTitre(): string
    {
        return $this->titre;
    }

    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    public function getContenu(): string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu)
    {
        $this->contenu = $contenu;
    }

    public function getDateCreation(): DateTime
    {
        return $this->dateCreation;
    }

    public function setDateCreation(DateTime $dateCreation): void
    {
        $this->dateCreation = $dateCreation;
    }

    public function getExcerpt($longueur)
    {
        if (strlen($this->contenu) <= $longueur)
        {
            return $this->contenu;
        }
        return substr($this->contenu, 0, $longueur) . "...";
    }
}

$article = new BlogPost(
    "Intro Andive au Jambon",
    "Andive de jambon au parmesan de cochon"
);

echo "Titre : " . $article->getTitre() . "<br>";
echo "Date : " . $article->getDateCreation()->format("d/m/Y") . "<br>";
echo "Extrait : " . $article->getExcerpt(50) . "<br>";