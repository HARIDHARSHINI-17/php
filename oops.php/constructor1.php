<?php
class Person
{
	public $name;
	public $age;
	public function __construct($name, $age)
	{
		$this->name = $name;
		$this->age = $age;
	}	
}
$Obj1 = new Person("hari",21);
echo $Obj1->name ."\n";
echo $Obj1->age;
?>
