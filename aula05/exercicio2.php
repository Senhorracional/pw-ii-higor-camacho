<?php
function ContaPrimos($num1, $num2) { //1, 10
    $numeros = array();
    $primos = 0;
    for($i = $num1; $i <= $num2; $i++){
        $divisores = 0;
        for($c = 1; $c <= $i; $c++){
            if($i % $c == 0){
                $divisores++;
            }
        }
        if($divisores == 2){
            $primos++;
            array_push($numeros, $i);
        }
    }
} 
ContaPrimos($_POST["num1"], $_POST["num2"]);
?>
