<?php

require_once __DIR__ . '/../components/body/interface/IBody.php';
require_once __DIR__ . '/../components/engine/interface/IEngine.php';
require_once __DIR__ . '/../components/wheel/interface/IWheel.php';
class Car
{
    private $body;
    private $engine;
    private $wheel;

    public function __construct(){
        $body = null;
        $engine = null;
        $wheel = null;
    }

    public function say(){
        return "Body: ".$this->body->say().", Engine: ".$this->engine->say().", Wheel: ".$this->wheel->say();
    }

    public function getBody()
    {
        return $this->body;
    }

    public function setBody(IBody $body)
    {
        $this->body = $body;
    }

    public function getEngine()
    {
        return $this->engine;
    }

    public function setEngine(IEngine $engine)
    {
        $this->engine = $engine;
    }

    public function getWheel()
    {
        return $this->wheel;
    }

    public function setWheels(IWheel $wheel)
    {
        $this->wheel = $wheel;
    }

}