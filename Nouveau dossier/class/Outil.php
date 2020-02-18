<?php
class Outil
{
  private $nom;
  private $action;
  private $contient;

  function __construct($nom, $action)
  {
    $this->setNom($nom);
    $this->setAction($action);
    $this->setContient([]);
  }

  function getNom()
  {
    return $this->nom;
  }

  function setNom($value)
  {
    $this->nom = $value;
  }

  function getAction()
  {
    return $this->action;
  }

  function setAction($value)
  {
    $this->action = $value;
  }

  function getContient()
  {
    return $this->contient;
  }

  function setContient($value)
  {
    $this->contient = $value;
  }
}
