<?php
class Shape {
    public $width = 0;
    public $height = 0;
    private $ver = 1.5;
    public static $counter =0;


    public static function getPI(){
        return 22/7;
    }

    public function __construct()
    {
        $this ::$counter++;
    }


    public function getArea()
    { 
        return $this -> width * $this-> height;
    }
}


class Square extends Shape{
    public function isSquare(){
        if($this-> width == $this-> height){
            return true;
        } else {
            return false;
        }
    }
}







?>