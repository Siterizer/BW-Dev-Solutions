<?php

require_once __DIR__ . '/interface/IEngine.php';
class PetrolEngine implements IEngine
{

    public function say()
    {
        return "Petrol";
    }
}