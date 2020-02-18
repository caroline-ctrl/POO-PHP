<?php
class Ingredients
{
    private $name;
    private $quantity;
    private $mesure;

    /******************************CONSTRUCTEUR***********************/
    public function __construct($name, $quantity, $mesure)
    {
        $this->setname($name);
        $this->setQuantity($quantity);
        $this->setMesure($mesure);
    }


    /**********************GETTERS ******************/
    /*
    return $quantity
    type: float
    */
    public function getname()
    {
        return $this->name;
    }


    /*
    return $quantity
    type: float
    */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /*
    return $mesure
    type: sting
    */
    public function getMesure()
    {
        return $this->mesure;
    }


    /**************************SETTER********************/
    /*
    set value $quantity
    type: float
    */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /*
    set value $name
    type: string
    */
    public function setname($name)
    {
        $this->name = $name;
    }

    /*
    set value $mesure
    type: string
    */
    public function setMesure($mesure)
    {
        $this->mesure = $mesure;
    }
}


