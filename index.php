<?php

class Cake{


    private $isPaid = false;

    function name() {
        return "cake";
    }

    function pay() {
        $this->isPaid = true;
    }

    function price() {
        return 10;
    }

    function isPaid() {
        return $this->isPaid ? "Paid" : "Not Paid";
    }
}



$cake = new Cake();
echo $cake->name() . "<br>";
echo $cake->price() . "<br>";
$cake->pay();
echo $cake->isPaid() . "<br>";
