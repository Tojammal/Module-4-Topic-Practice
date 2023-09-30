<?php

// Class & Object


class OSTAD{
    public $name = "PHP Batch 2";
    public function AddTwo($num1,$num2){
        echo $num1 + $num2;
    }
}

$obj = new OSTAD;
$obj -> AddTwo(2,3);

echo "\n";

echo $obj -> name;

// To declare a variable into the class, 
//we need to use "$this" keywords


class OSTAD2{
    public $name = "PHP Batch 2";
    public function Demo(){
        echo $this -> name;
    }
}

$obj = new OSTAD2;
$obj -> Demo();