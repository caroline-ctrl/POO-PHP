<?php
class Ingredient
{
  private $nom;

  public function __construct($nom)
  {
    $this->setNom($nom);
  }

  function getNom()
  {
    return $this->nom;
  }

  function setNom($value)
  {
    $this->nom = $value;
  }
}
