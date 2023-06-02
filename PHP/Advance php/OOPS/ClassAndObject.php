<?php


Class Calculation{
    public $a,$b,$c;
    public function sum()
    {
        $this->c= $this->a + $this->b;
        return  $this->c;
    }
    
    public function sub()
    {
        $this->c= $this->a - $this->b;
        return  $this->c;
    }
    public function multi()
    {
        $this->c= $this->a * $this->b;
        return  $this->c;
    }

}

$c1= new Calculation();
$c1->a = 18;
$c1->b = 18;
echo $c1->sum();
echo "<br>";
$c2= new Calculation();
$c2->a = 78;
$c2->b = 18;
echo $c2->sub();
echo "<br>";
$c3= new Calculation();
$c3->a = 45;
$c3->b = 18;
echo $c3->multi();



?>