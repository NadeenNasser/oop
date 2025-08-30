<?php
require_once "Vehicle.php";
class car extends Vehicle{

    private $color;
    private $year;
    public $brand;
    function __construct($brand, $color, $year){
        $this->brand = $brand;
        $this->color = $color;
        $this->year = $year;
    }

    public function get_details(){
       return "car brand: " . $this->brand . " car color: " . $this->color . " car make year: " . $this->year;
    }

    function setBrand($brand){
        $this->brand = $brand;
    }

    function getBrand(){
        return $this->brand;
    }

    public function setYear($year){
        $this->year = $year;
    }

    public function getYear(){
        return $this->year;
    }

    public function getType(){
       return "this is a car \n";
    }

    public function startEngine(){
       return "Car engine started\n";
    }

}