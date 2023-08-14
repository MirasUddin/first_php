<?php

class myclass{
    public $x, $y, $z, $r;
    
    public function __construct($a, $b, $c){
        $this->x = $a;
        $this->y = $b;
        $this->z = $c;
        $this->r = $a + $b + $c;
        return $this->r;
    }
}

$result = new myclass(10, 154, 50);

$tormos = new myclass(20, 54, 44);
$kola = new myclass(20, 40, 25);


echo $result->r . '<br>';

echo " 3 tormoser dam ". $tormos->r. " Tk" . "<br>";
echo " 3 hali kolar dam ". $kola->r. " BDT " . "<br>";


?>