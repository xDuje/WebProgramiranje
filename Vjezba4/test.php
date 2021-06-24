<?php
class Test {
    static function doSomething() {
        print("radi");
    }
function __construct($input) {
var_dump($input);
if ($input == 1) self::doSomething(); //input == 1
else print 'Not true!';
}
}
$input = '1';
$test = new Test($input);
?>