<?php

class Rectangle {
    protected $width;
    protected $height;
    
    public function setHeight($height) {
        $this->height = $height;
    }
    
    public function getHeight() {
        return $this->height;
    }
    
    public function setWidth($width) {
        $this->width = $width;
    }
    
    public function getWidth() {
        return $this->width;
    }
    
    public function area() {
        return $this->height * $this->width;
    }
}

class Square extends Rectangle {
    
    public function setHeight($value) {
        $this->width = $value;
        $this->height = $value;
    }
    
    public function setWidth($value) {
        $this->width = $value;
        $this->height = $value;
    }
}
class AreaTester {
    private $rectangle;
    
    public function __construct(Rectangle $rectangle) {
        $this->rectangle = $rectangle;
    }
    
    public function testArea($width,$height) {
        $this->rectangle->setHeight($width);
        $this->rectangle->setWidth($height);
        return $this->rectangle->area();
    }
}

$rectangle = new Rectangle();
$rectangleTest = new AreaTester($rectangle);
$rectangleTest->testArea(2,3); // gives 6 as expecated
$squre = new Square();
$rectangleTest = new AreaTester($squre);
$rectangleTest->testArea(2,3); // gives 9 expecated is 6
