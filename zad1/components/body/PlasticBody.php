<?php

require_once __DIR__ . '/interface/IBody.php';
class PlasticBody implements IBody
{

    public function say()
    {
        return "Plastic";
    }
}