<?php
class Hotel {
    private string $_name;
    private $_rooms;
    private $_adress;
        
    public function __construct($name,$adress){
        $this->_name = $name;
        $this->_adress = $adress;

        $this->_rooms = [];
    }
            
    //GET
    public function getName(){
        return $this->_name;
    }
    public function getAdress(){
        return $this->_adress;
    }
       
    //SET
    public function setName($name){
        $this->_name = $name;
    }



    
    public function addRoom($newRoom){
        array_push($this->_rooms,$newRoom);
    }

    public function listRoom(){
        echo "Statuts des chambres de ".$this->getName().
        "<br>   
            <tr>
                <th>Chambre</th>
                <th>Prix</th>
                <th>Wifi</th>
                <th>État</th>
            </tr>";
        foreach($this->_rooms as $room){
            echo "<tr>
                    <th>"
                        .$room->getName().
                    "</th>
                    <td>"
                        .$room->getPrice().
                    "</td>
                    <th>"
                        .$room->getWifi().
                    "</th>
                    <th>"
                        .$room->getEtat().
                    "</th>
                </tr>";
        }
    }
}
?>