<?php
class Recette
{
    private $ingredients;
    private $ustensiles;
    private $appareils;



    /****************************CONSTRUCT*********************/
    public function __construct($ingredients, $ustensiles, $appareils){
        $this->setIngredients($ingredients);
        $this->setUstensiles($ustensiles);
        $this->setAppareils($appareils);
    }


    

    /****************************GETTER************************/

/*
*return $ingredient
*type: array[object]
*/
    public function getIngredients()
    {
        return $this->ingredients;
    }

/*
*return $ustensiles
*type: array[object]
*/

    public function getUstensiles()
    {
        return $this->ustensiles;
    }


/*
*return $appareils
*type: array[object]
*/
    public function getAppareils()
    {
        return $this->appareils;
    }




    /******************************SETTER*********************************/
    
    /*
    *set value $ingredients
    *type: array[object]
    */
    public function setIngredients($ingredients){
        $this->ingredients = $ingredients;
    }


    /*
    *set value $ustensiles
    *type: array[object]
    */
    public function setUstensiles($ustensiles){
        $this->ustensiles = $ustensiles;
    }


    
    /*
    *set value $appareils
    *type: array[object]
    */
    public function setAppareils($appareils){
        $this->appareils = $appareils;
    }
}
