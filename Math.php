<?php

Class  Math {
    function  __construct(){
        $this->balance = 0;
       
    }

    function topUp($amt){
        $this->balance += $amt;
        return  $this->balance;
    }
    
    function withdraw($amt){
        $this->balance -= $amt;
        return  $this->balance;
    }
}

$math  = new Math();
echo $math->topUp(500);
echo $math->topUp(200);
echo $math->withdraw(100);
