<?php
final class fruit{
    public $name;
    public $color;
    public $weight;
    public function __construct($name,$color){
        $this->name = $name;
        $this->color = $color;
    }
    function get(){
        echo "the fruit name is ".$this->name,"and color is ".$this->color;
    }
}
class banana extends fruit{
    function __construct($name,$color,$weight){
    parent::__construct($name,$color);
    $this->weight = $weight;
    }
    function get(){
        echo parent::get(),"the weight is ".$this->weight;//override
    }
}
$s1 = new banana("banana","yellow",2);
$s1->get();