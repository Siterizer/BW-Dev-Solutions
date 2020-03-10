<?php

require_once __DIR__ . '/interface/ICarFactory.php';
require_once __DIR__.'/../components/engine/ElectricEngine.php';
require_once __DIR__.'/../components/wheel/SmallWheel.php';
require_once __DIR__.'/../components/body/PlasticBody.php';

class TeslaFactory implements ICarFactory
{
    public function getEngine()
    {
        return new ElectricEngine();
    }

    public function getWheel()
    {
        return new SmallWheel();
    }

    public function getBody()
    {
        return new PlasticBody();
    }
}