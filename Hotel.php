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

    public function countRooms(){
        return count($this->_rooms);
    }
    public function countReservedRooms(){
        $i = 0;
        foreach($this->_rooms as $room){
            if($room->getDisponibility() == false){
                $i++;
            }
        }
        return $i;
    }

    public function getHotelInfo(){
        $roomDispo = $this->countRooms()-$this->countReservedRooms();

        echo $this->getName()."<br>".
            $this->getAdress()."<br>
            Nombre de chambres : ".$this->countRooms()."<br>
            Nombre de chambres réservées : ".$this->countReservedRooms()."<br>
            Nombre de chambres dispo : ".$roomDispo."<br>";
    }

    public function getHotelReservation(){
        echo "Réservations de l'hôtel ".$this->getName()."<br><div>".
            $this->countReservedRooms()." RÉSERVATION";
            // rajouté un S pour le pluriels
                if($this->countReservedRooms() > 1){
                    echo "S";
                };
        echo "</div><br>";

        foreach($this->_rooms as $room){
            var_dump($room);
            if($room->getDisponibility() == false){
                echo $room->getReservation()->getUser()." - ".$room->getName()." - du ".$room->getReservation()->getDateBegging()." au ".$room->getReservation()->getDateEnd()."<br>";
            }
        }
            
    }

    public function listRoom(){
        echo "Statuts des chambres de ".$this->getName()."<br>   
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