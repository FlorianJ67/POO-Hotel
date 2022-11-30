<h1>Hotel</h1>

<?php
 spl_autoload_register(function ($class_name) {

    require_once $class_name . '.php';

});


$hotel1 = new Hotel("Hilton **** Strasbourg","10 route de la Gare 67000 Strasbourg");
$hotel2 = new Hotel("Regent **** Paris","10 rue du Garage 67000 Strasbourg");

$user1 = new People("Virgile","GIBELLO","Homme","01-01-2000");
$user2 = new People("Micka","MURMANN","Homme","02-02-2001");


$chambre1 = new Room("Chambre 1",120,2,$hotel1);
$chambre2 = new Room("Chambre 2",120,2,$hotel1);
$chambre3 = new Room("Chambre 3",120,2,$hotel1);

$chambre16 = new Room("Chambre 16",300,2,$hotel1);
$chambre17 = new Room("Chambre 17",300,2,$hotel1);
$chambre18 = new Room("Chambre 18",300,2,$hotel1);
$chambre19 = new Room("Chambre 19",300,2,$hotel1);



$reservation1 = new Reservation("01-01-2021","02-01-2021",$user1,$chambre2);
$reservation2 = new Reservation("04-02-2020","02-01-2024",$user2,$chambre1);

$hotel1->getHotelInfo();
echo "<br>";
$hotel1->getHotelReservation();

?>