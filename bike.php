<?php
require_once "Vehicle.php";
class bike extends Vehicle
{
    function __construct($brand, $color, $year){
        $this->brand = $brand;
        $this->color = $color;
        $this->year = $year;

    }

    public function get_details(){
        return "bike brand: {$this->brand} \n" . " bike color: {$this->color} \n"." bike year: {$this->year} \n";
    }

    public function getType(){
        return "this is a bike \n";
    }
  public function startEngine (){
     return "bike engine started\n";
  }
}