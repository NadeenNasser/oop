<?php

 abstract class Vehicle{

  public $brand ;
  public $speed ;

  public abstract function getType();
  public abstract function startEngine();
  public abstract function get_details();

}