<?php
require 'car.php';

// Create a new Car object
$myCar = new Car();

// Set property values
$myCar->make = "Porsche";
$myCar->model = "GT3 RS";
$myCar->year = 2024;

// Display car information
echo $myCar->getCarInfo(); 


/*
I found creating the Car class the hard part
 (i watch alot of youtube videos until i got it)
 but the part i found really easy is (drum rollll) writing the start tag <?php yay
 and deciding what car i was gonna use :)
*/
