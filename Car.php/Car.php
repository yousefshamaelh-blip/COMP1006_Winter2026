<?php
// Car class represents a car object
class Car {

    // Properties of the car
    public $make;
    public $model;
    public $year;

    // function to return car information 
    public function getCarInfo() {
        return "Car Make: " . $this->make . 
               ", Model: " . $this->model . 
               ", Year: " . $this->year;
    }
}
