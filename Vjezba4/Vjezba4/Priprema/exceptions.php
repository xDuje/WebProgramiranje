<?php

function inverse($x){
    if (!$x) {
        throw new Exception('Divison by zero.');
    }
    return 1/$x;
}

try {
    echo inverse(5). "\n";
    echo inverse(0). "\n";
} catch (Exception $e) {
    echo 'Caught exception: ', $e->getMessage(), "\n";
}

echo "Hello world \n";

?>