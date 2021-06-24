<?php

class SpecificException extends Exception { }

function test() {
    do_something_risky() or throw new Exception('nein.');
}

try{
    test();
} catch (Exception $e){
    print $e->getMessage();
}

?>