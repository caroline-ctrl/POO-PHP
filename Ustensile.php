<?php
class Ustensile
{
    private $name;
    private $utility;
    private $materiaux;

    public function __construct($name, $utility, $materiaux) {
        $this->setName($name);
        $this->setUtility($utility);
        $this->setMateriaux($materiaux);
    }

    /******************* GETTERS ****************/

    /*
    * return $name
    * type: string
    */
    public function getName() {
        return $this->name;
    }

    /*
    * return $utility
    * type: string
    */
    public function getUtility() {
        return $this->utility;
    }


    /*
    * return $utility
    * type: string
    */
    public function getMateriaux() {
        return $this->materiaux;
    }

    /****************** SETTERS ********************/

    /*
    * set value $name
    * type: string
    */
    public function setName($name) {
        $this->name = $name;
    }

    /*
    * set value $utility
    * type: string
    */
    public function setUtility($utility) {
        $this->utility = $utility;
    }


    /*
    * set value $utility
    * type: string
    */
    public function setMateriaux($materiaux) {
        $this->materiaux = $materiaux;
    }
}

