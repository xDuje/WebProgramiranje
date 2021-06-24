<?php
//1.caught exception: Divison by zero.
//2.iznimike  string(4) foo!
class NulaExcept extends Exception
{
}
class Divide
{
    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }
    /*
     funkcija djeli brojeve
     @returns string
    */
    function divide()
    {
        if ($this->b === 0) {
            throw new NulaExcept("Nemoguce dijelit sa nulon");
        }
        return $this->a / $this->b;
    }
}
$djeli = new Divide(10, 2);
try {
    echo $djeli->divide() . '<br>';
} catch (NulaExcept $e) {
    echo ($e->getMessage() . '<br>');
} finally {
    echo "Done.";
}



?>