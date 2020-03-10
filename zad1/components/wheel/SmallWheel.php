<?php

require_once __DIR__ . '/interface/IWheel.php';
class SmallWheel implements IWheel
{

    public function say()
    {
        return "Small";
    }
}