<?php
include('Ingredient.php');
include('Outil.php');

class Recette
{
  public $chocolat;
  public $eau;
  public $sel;
  public $sucre;
  public $oeuf;
  public $saladiers;
  public $casserolle;
  public $frigo;
  public $gaziniere;
  public $batteur;
  public $jaunes;
  public $blancs;

  // instanciation des ingrédients et outils nécessaires à la recette
  public function __construct()
  {
    $this->oeuf = [new Ingredient('jaune'), new Ingredient('blanc')];
    $this->chocolat = new Ingredient('chocolat');
    $this->eau = new Ingredient('eau');
    $this->sucre = new Ingredient('sucre');
    $this->sel = new Ingredient('sel');
    $this->batteur = new Outil('batteur', 'bat');
    $this->frigo = new Outil('frigo', 'refroidit');
    $this->gaziniere = new Outil('gaziniere', 'chauffe');
    $this->saladiers[0] = new Outil('saladier1', 'contient');
    $this->saladiers[1] = new Outil('saladier2', 'contient');
    $this->saladiers[2] = new Outil('saladier3', 'contient');
    $this->casserolle = new Outil('casserolle', 'contient');
  }

  // fonction qui lance la suite de fonctions nécessaires à la recette
  public function demarrerRecette()
  {
    // on casse le chocolat
    $this->casser($this->chocolat);
    // on remplit le saladier1 de chacolat cassé
    $this->remplir([$this->chocolat], $this->saladiers[0]);
    // on remplit la casserolle d'eau et le saladier1 (bain marie)
    $this->remplir([$this->eau,  $this->saladiers[0]], $this->casserolle);
    // on chauffe le saladier pour faire fondre le chocolat
    $this->utiliser($this->casserolle, $this->gaziniere);
    // on sépare le blanc du jaune
    $this->separerOeuf($this->oeuf, [$this->saladiers[1], $this->saladiers[2]]);
    // on met le sucre, le jaune d'oeuf et le chocolat fondu dans le saladier1
    $this->remplir([$this->sucre, $this->saladiers[1]->getContient()[0]], $this->saladiers[0]);
    // on met le sel dans le blanc d'oeuf
    $this->remplir([$this->sel], $this->saladiers[2]);
    // on bat le sucre, le jaune d'oeuf et le chocolat fondu dans le saladier1
    $this->utilise($this->saladiers[0], $this->batteur);
    // on bat le sel et le blanc dans le saladier2
    $this->utilise($this->saladiers[2], $this->batteur);
    // on mélange le tout
    $this->remplir([$this->saladiers[0]->getContient()[0], $this->saladiers[0]->getContient()[1],  $this->saladiers[0]->getContient()[2]], $this->saladiers[2]); // ajout sucre/chocolat/jaunes dans oeufs en neige
    // on met la mousse au frigo
    $this->utilise($this->saladiers[2], $this->frigo);
  }

  // transforme l'ingrédient en morceau en renommant l'ingrédient
  public function casser($ingredient)
  {
    $ingredient->setNom($ingredient->getNom() . ' en morceau');
    echo $ingredient->getNom() . '<br>';
  }

  // remplit le contenant des ingrédients et affiche les opérations
  // push les ingrédients dans le contenant
  public function remplir($ingredients, $contenant)
  {
    foreach ($ingredients as $ingredient) {
      $temp = $contenant->getContient();
      array_push($temp, $ingredient);
      $contenant->setContient($temp);
    }
    foreach ($contenant->getContient() as $ingredient) {
      echo $contenant->getNom() . ' contient ' . $ingredient->getNom() . '<br>';
    }
  }

  // l'appareil effectue l'action sur le contenant
  public function utiliser($contenant, $appareil)
  {
    echo $appareil->getNom() . ' ' . $appareil->getAction() . ' ' . $contenant->getNom() . '<br>';
  }

  // sépare l'oeuf (qui est un array de deux ingrédients) en deux ingérdients distincts
  public function separerOeuf($ingredient, $contenants)
  {
    $temp1 = $contenants[0]->getContient();
    $temp2 = $contenants[1]->getContient();
    array_push($temp1, $ingredient[0]);
    array_push($temp2, $ingredient[1]);
    $contenants[0]->setContient($temp1);
    $contenants[1]->setContient($temp2);
    foreach ($contenants as $contenant) {
      foreach ($contenant->getContient() as $ingredient)
        echo $contenant->getNom() . ' contient ' . $ingredient->getNom() . '<br>';
    }
  }

  // utilise l'outil sur le contenant
  public function utilise($contenant, $outil)
  {
    echo $outil->getNom() . ' ' . $outil->getAction() . ' contenu de ' . $contenant->getNom() . '<br>';
  }
}
