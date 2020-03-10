<?php


require_once __DIR__ . '/interface/IEngine.php';
class ElectricEngine implements IEngine
{

    public function say()
    {
        return "Electric";
    }
}