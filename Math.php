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
    public function balance(Type $var = null)
    {
         echo $this->balance;
    }
}


