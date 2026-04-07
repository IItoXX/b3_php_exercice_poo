<?php
/*
 * ÉNONCÉ :
 * Un enum est déjà présent, il faudra l'utiliser pour la propriété status de la classe Task.
 * Créez une classe Task avec les propriétés protected title, description et status (par défaut TODO).
 * Ajoutez une méthode markAsDone() qui change le status en DONE.
 * Ajoutez une méthode display() qui affiche les infos de la tâche.
 * Instanciez une tâche, affichez ses infos, puis marquez-la comme terminée et affichez à nouveau.
 * Note : Pour afficher le status, utilisez $this->status->value pour obtenir la valeur de l'enum.
*/

enum TaskStatus: string
{
    case TODO = "a faire";
    case DONE = "finissh";
}

class Task
{
    protected string $titre;
    protected string $description;
    protected TaskStatus $status;

    public function __construct(string $titre, string $description)
    {
        $this->titre = $titre;
        $this->description = $description;
        $this->status = TaskStatus::TODO;
    }

    public function markAsDone()
    {
        $this->status = TaskStatus::DONE;
    }

    public function display()
    {
        echo "Tache : " . $this->titre . "<br>";
        echo "Description : " . $this->description . "<br>";
        echo "Status : " . $this->status->value . "<br>";
    }
}

$tache = new Task("Faire les 10 exo du tp");
$tache->display();

echo "<hr>";

$tache->markAsDone();
$tache->display();