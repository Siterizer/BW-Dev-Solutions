Siema


<?php
require_once __DIR__ . '/CarFactory.php';
    require_once __DIR__ . '/car/Car.php';

    $teslaFactory = CarFactory::createCar("Tesla");
    $car = new Car();
    $car->setBody($teslaFactory->getBody());
    $car->setEngine($teslaFactory->getEngine());
    $car->setWheels($teslaFactory->getWheel());
    echo($car->say());

?>