<?php

abstract class shape{
    abstract public function calculatearea();
}

class reactangle extends shape{
    private $length;
    private $width;
    public function __construct($length,$width){
        $this->length=$length;
        $this->width=$width;
    }
    public function calculatearea(){
        $area= $this->length*$this->width;
        echo "area of reactangle: ",$area;
    }
}
$reactangle = new reactangle(5,3);
$reactangle->calculatearea();

//rectangle : length*width
//square : side raise to 2
//triangle: 1/2* base * height
?>
