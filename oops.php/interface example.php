<?php 
interface fruit{
    public function banana();
    public function apple(){
        echo "I LIKE APPLE";
    }
}
class fruitname implements fruit{
    public function banana(){
        echo "I LIKE BANANA";
    }
}
$obj = new fruitname();
$obj->banana();
$obj->apple();
?>