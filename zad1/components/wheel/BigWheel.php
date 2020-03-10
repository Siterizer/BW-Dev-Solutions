<?php

require_once __DIR__ . '/interface/IWheel.php';
class BigWheel implements IWheel
{

    public function say()
    {
        return "Big";
    }
}