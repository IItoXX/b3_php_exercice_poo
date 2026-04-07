<?php
/*
 * ÉNONCÉ :
 * La classe Person existe déjà avec firstName et lastName.
 * 1. Créez une classe Student qui hérite de Person et ajoute les propriétés protected $studentNumber, $school, $class.
 * 2. Ajoutez les getters/setters pour ces propriétés et une méthode displayStudent() qui affiche toutes les infos.
 * 3. Instanciez un Student et affichez ses informations.
 */

class Person
{
    public function __construct(protected string $firstName, protected string $lastName)
    {
    }

    public function getFirstName(): string { return $this->firstName; }
    public function setFirstName(string $firstName): void { $this->firstName = $firstName; }
    public function getLastName(): string { return $this->lastName; }
    public function setLastName(string $lastName): void { $this->lastName = $lastName; }
}

class Student extends Person
{
    protected string $numeroEtudiant;
    protected string $ecole;
    protected string $classe;

    public function __construct(string $prenom, string $nom, string $numeroEtudiant, string $ecole, string $classe)
    {
        parent::__construct($prenom, $nom);
        $this->numeroEtudiant = $numeroEtudiant;
        $this->ecole = $ecole;
        $this->classe = $classe;
    }

    public function getNumeroEtudiant() { return $this->numeroEtudiant; }
    public function setNumeroEtudiant($num) { $this->numeroEtudiant = $num; }
    public function getEcole(): string { return $this->ecole; }
    public function setEcole(string $ecole) { $this->ecole = $ecole; }
    public function getClasse(): string { return $this->classe; }
    public function setClasse($classe) { $this->classe = $classe; }

    public function displayStudent()
    {
        echo "Nom : " . $this->firstName . " " . $this->lastName . "<br>";
        echo "N° étudiant : " . $this->numeroEtudiant . "<br>";
        echo "École : " . $this->ecole . "<br>";
        echo "Classe : " . $this->classe . "<br>";
    }
}

$etudiant = new Student("Jean", "Nugue", "11616", "school of scool de school", "B3 Dev");
$etudiant->displayStudent();