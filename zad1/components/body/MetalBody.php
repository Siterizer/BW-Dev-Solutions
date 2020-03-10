<?php

require_once __DIR__ . '/interface/IBody.php';
class MetalBody implements IBody
{

    public function say()
    {
        return "Metal";
    }
}