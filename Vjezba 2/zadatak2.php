<?php

class Person
{
    protected $name;
    protected $ID;
    protected $height;
    public static $nOfPeople = 0;
    public function __construct()
    {
        Person :: $nOfPeople++;
        $this->id = rand(0,255);
        print("ID rnd");

    }
    public function __set($property,$value)
    {
        switch($property)
        {
            case('name'):
                $this->name = $value;
                break;
            case('height'):
                $this->height = $value;
                break;
        }
    }
    public function __get($property)
    {
        return $this->$property;
    }
    public function __destruct()
    {
        print($this->name . " is being destroyed.");
    }
    public final function gender()
    {
        return "n/a";
    }
}
$p1 = new Person();
$p1->name = "Djuro";
$p1->height = '1.20m';
print($p1->name . ' is ' .$p1->height . ' tall.');
$p2 = new Person();
$p2->name = "Vele";
$p2->height = "1.30m";
print($p2->name . ' is ' .$p2->height . ' tall.');
print(Person::$nOfPeople);
if($p2 instanceof Person)
{
    print("Legele negra Djuro");
}
else
{
    print("Legele Djuro!");
}
class Employee extends Person
{
    function Gender(){
        return 'female';
    }
}

// $personeOne = new Employee();
// $personeOne -> name = 'Pero';
// $personeOne -> height Employee();
// 
?>