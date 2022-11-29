<?php
class Reservation {
    private $_dateBeg;
    private $_dateEnd;
    private $_user;
    private $_room;

        
    public function __construct($beggining,$end,People $user,Room $room){
        $this->_dateBeg = $beggining;
        $this->_dateEnd = $end;
        $this->_user = $user;
        $this->_user->addReserv($this);

        $this->_room = $room;
        $this->_room->changeEtat();        
    }
            
    //GET
    public function getDateBegging(){
        return $this->_dateBeg;
    }
    public function getDateEnd(){
        return $this->_dateEnd;
    }
    public function getUser(){
        return $this->_user;
    }
    public function getRoom(){
        return $this->_room;
    }
       
    //SET
    public function setDateBegging($begging){
        $this->_dateBeg = $begging;
    }
    public function setDateEnd($end){
        $this->_dateEnd = $end;
    }
    public function setBedNb($user){
        $this->_user = $user;
    }
    public function setWifi($room){
        $this->_room = $room;
    }
}
?>