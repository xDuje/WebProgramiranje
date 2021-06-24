<?php

$a = array('name' => 'Fred', 'age' => 35, 'wife' => 'Wilma');
print_r($a);
//array ( [name] => Fred [age] => 35 [wife] => Wilma )
print '<br>';
class P{
    var $name = 'nat';
    //...
}
$p = new P;
print_r($p);
//P Object ( [name] => nat )
print "<br>";
print_r(true);// "1"
print_r(false);// ""
print_r(null);// ""
print "<br>";
var_dump(true); // "bool(true)"
var_dump(false);// "bool(false)"
var_dump(null);// NULL
print "<br>";
var_dump(array('name' => "Fred", 'age' => 35)); // array(2) { ["name"]=> string(4) "Fred" ["age"]=> int(35) }
print "<br>";
class P2 {
    var $name1 = 'Nat';
}
$p2 = new P2;
var_dump($p2); // object(P2)




?>