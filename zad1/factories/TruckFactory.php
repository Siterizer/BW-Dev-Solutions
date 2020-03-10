<?php


require_once __DIR__ . '/interface/ICarFactory.php';
require_once __DIR__.'/../components/engine/DieselEngine.php';
require_once __DIR__.'/../components/wheel/BigWheel.php';
require_once __DIR__.'/../components/body/MetalBody.php';
class TruckFactory implements ICarFactory
{

    public function getEngine()
    {
        return new DieselEngine();
    }

    public function getWheel()
    {
        return new BigWheel();
    }

    public function getBody()
    {
        return new MetalBody();
    }
}