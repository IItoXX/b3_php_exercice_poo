<?php
/*
 * ÉNONCÉ :
 * Créez une classe Contact avec les propriétés protected name, email et phone.
 * Ajoutez les getters/setters et une méthode displayContact() qui affiche les infos du contact.
 * Instanciez un contact et affichez ses informations.
*/

class Contact
{
    protected string $nom;
    protected string $email;
    protected string $telephone;

    public function __construct(string $nom, string $email, string $telephone)
    {
        $this->nom = $nom;
        $this->email = $email;
        $this->telephone = $telephone;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getTelephone(): string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone)
    {
        $this->telephone = $telephone;
    }

    public function displayContact()
    {
        echo "Nom : " . $this->nom . "<br>";
        echo "Email : " . $this->email . "<br>";
        echo "Téléphone : " . $this->telephone . "<br>";
    }
}

$contact = new Contact("jean Nugue", "jeannugue@gmail.com", "07 07 07 07 07");
$contact->displayContact();

echo "<hr>";

$contact->setEmail("mimimi@gmail.com");
$contact->displayContact();