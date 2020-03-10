<?php


require_once __DIR__ . '/interface/ICarFactory.php';
require_once __DIR__.'/../components/engine/PetrolEngine.php';
require_once __DIR__.'/../components/wheel/BigWheel.php';
require_once __DIR__.'/../components/body/MetalBody.php';
class CamperVanFactory implements ICarFactory
{
    public function getEngine()
    {
        return new PetrolEngine();
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
