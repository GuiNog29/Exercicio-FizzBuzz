<?php
$numero = 100;
$i = 1;

for($i; $i <= $numero; $i++)
    if($i % 15 == 0)
        echo "FizzBuzz" . " ";

    elseif($i % 3 == 0)
        echo "Fizz" . " ";

    elseif($i % 5 == 0)
        echo "Buzz" . " ";

    else
        echo $i . " ";
