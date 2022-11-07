<?php
include 'Math.php';

$math  = new Math();
echo $math->topUp(500);
echo $math->topUp(200);
echo $math->withdraw(100);