<?php

class SpecificException extends Exception { }

function test(){
    throw new SpecificException('nein');
}

try {
    test();
} catch (SpecificException) {
    print "A specific exception was throw,but we don't care about details.";
}


?>