<?php

use src\Strategy\Calculator;

require __DIR__ . "\\vendor\\autoload.php";


$calc = new Calculator("+");
echo $calc->calc(5,3);