<?php


require_once __DIR__ . '/interface/IEngine.php';
class DieselEngine implements IEngine
{

    public function say()
    {
        return "Diesel";
    }
}