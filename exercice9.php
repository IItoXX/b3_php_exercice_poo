<?php
/*
 * ÉNONCÉ :
 * Créez une classe MusicAlbum avec les propriétés title, artist et tracks (tableau).
 * Ajoutez les getters/setters et une méthode addTrack() pour ajouter un morceau.
 * Ajoutez une méthode displayAlbum() qui affiche les infos et la liste des morceaux.
 * Instanciez un album, ajoutez des morceaux et affichez l'album.
*/

class MusicAlbum
{
    protected string $titre;
    protected string $artiste;
    protected array $pistes = [];

    public function __construct(string $titre, string $artiste)
    {
        $this->titre = $titre;
        $this->artiste = $artiste;
    }

    public function getTitre() { return $this->titre; }
    public function setTitre($titre) { $this->titre = $titre; }
    public function getArtiste(): string { return $this->artiste; }
    public function setArtiste(string $artiste) { $this->artiste = $artiste; }

    public function addTrack($nomPiste)
    {
        $this->pistes[] = $nomPiste;
    }

    public function displayAlbum()
    {
        echo "Album : " . $this->titre . "<br>";
        echo "Artiste : " . $this->artiste . "<br>";
        echo "Pistes :<br>";
        foreach ($this->pistes as $i => $piste)
        {
            echo ($i + 1) . ". " . $piste . "<br>";
        }
    }
}

$album = new MusicAlbum("jsp0", "jsp0.1");
$album->addTrack("jsp1");
$album->addTrack("jsp2");
$album->addTrack("jsp3");
$album->addTrack("jsp4");
$album->displayAlbum();