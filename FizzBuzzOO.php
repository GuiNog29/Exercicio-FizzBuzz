<?php
    $ronaldo = new Exercicio();
    $ronaldo->FizzBuzzOO();

    class Exercicio{

        public $fizzbuzz = "FizzBuzz";
        public $fizz = "Fizz";
        public $buzz = "Buzz";

        public function FizzBuzzOO(){
            for($i = 1; $i <= 100; $i++)

                if($i % 15 == 0)
                    echo $this->fizzbuzz . " ";
        
                elseif($i % 3 == 0)
                    echo $this->fizz . " ";
        
                elseif($i % 5 == 0)
                    echo $this->buzz . " ";

                else
                    echo $i . " ";
        }
    }
?>
