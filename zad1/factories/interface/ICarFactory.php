<?php


require_once __DIR__.'/../../components/engine/interface/IEngine.php';
interface ICarFactory
{
    public function getEngine();
    public function getWheel();
    public function getBody();
}