<?php
function sum($num1, $num2)
{
    return $num1+$num2;
}
echo sum(4,3);
function nType($num)
{
    return $num % 2 == 0 ? 'true' : 'false';
}

print (nType(sum(1,2)));
print (nType(sum(1,3)));
class MathOperations
{
    public function zbroji($x,$y)
    {
        return $x+$y;
    }

    public function oduzmi($x,$y)
    {
        return $x-$y;
    }

    public function mnozi($x,$y)
    {
        return $x*$y;
    }

    public function djeli($x,$y)
    {
        if($y == 0)
        {
            return "Nemoze se dijelit sa nula!";
        }
        else
        {
            return $x/$y;
        }
    }
}

$op = new MathOperations();
print("<br>");
print($op->djeli(1,0));
print($op->djeli(1,1));
class Suma
{
    public function zbroji($num1,$num2)
    {
        $zbroj = $num1+$num2;
        return nType($zbroj) ? print('Zbroj je ' . $zbroj. ' ,paran broj. <br>') : print('Zbroj je: ' . $zbroj . 'nije paran.');
    }
    function nType($zbroj)
    {
        return $zbroj % 2 == 0;
    }


}
$su = new Suma();
print("<br>");
$su->zbroji(1,2);
$su->zbroji(1,3);
class SumParDivide extends Suma
{
    public function zbroji($num1,$num2)
    {
        $zbroj = $num1+$num2;

        if(parent::nType($zbroj))
        {
            print("Zbroj: " . $zbroj . " je paran broj. \nDijeljenje sa 2: " . $zbroj/2 . '<br>');
        }
        else
        {
            print("Zbroj: " .$zbroj . " je neparan broj. <br>");
        }
    }
}
$sumpard = new SumParDivide();
$sumpard->zbroji(1,2);
print("<br>");
$sumpard->zbroji(1,3);



?>