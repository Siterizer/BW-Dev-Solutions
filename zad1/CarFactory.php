<?php

require_once('factories/TeslaFactory.php');
require_once('factories/TruckFactory.php');
require_once('factories/CamperVanFactory.php');

abstract class CarFactory
{
    public static function createCar(String $carType){
        switch ($carType){
            case "Tesla":
                return new TeslaFactory();
                break;
            case "Truck":
                return new TruckFactory();
                break;
            default:
                return new CamperVanFactory();
                break;
        }

    }

}