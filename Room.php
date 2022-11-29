<?php
class Room {
    private string $_name;
    private $_price;
    private int $_bedNb;
    private bool $_wifi;
    private $_disponibility;
    private $_hotel;
        
    public function __construct($name,$price,$bedNb,Hotel $hotel){
        $this->_name = $name;
        $this->_price = $price;
        $this->_bedNb = $bedNb;
        $this->_wifi = false;
        $this->_disponibility = true;

        $this->_hotel = $hotel;
        $this->_hotel->addRoom($this);
    }
            
    //GET
    public function getName(){
        return $this->_name;
    }
    public function getPrice(){
        return $this->_price;
    }
    public function getBedNb(){
        return $this->_bedNb;
    }
    public function getWifi(){
        return $this->_wifi;
    }
    public function getEtat(){
        return $this->_etat;
    }
       
    //SET
    public function setName($name){
        $this->_name = $name;
    }
    public function setPrice($price){
        $this->_price = $price;
    }
    public function setBedNb($bedNb){
        $this->_bedNb = $bedNb;
    }
    public function setWifi($wifi){
        $this->_wifi = $wifi;
    }
    public function setEtat($etat){
        $this->_etat = $etat;
    }

    public function changeEtat(){
        if ($this->_disponibility == true){
            $this->_disponibility = false;
        } else {
            $this->_disponibility = true;
        }
    }


}
?>