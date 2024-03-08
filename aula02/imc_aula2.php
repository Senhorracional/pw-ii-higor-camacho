<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício IMC</title>
</head>
<body>
    <?php
        $peso = 80;
        $altura = 1.78;
        $imc = $peso / pow($altura, 2);

        echo "Peso: " . $peso . "kg" . "<br>";
        echo "Altura: " . $altura . "m" . "<br>";
        echo "Imc: " . $imc . "<br>";

        switch($imc){
            case $imc <= 16.9:
               echo "Muito abaixo do peso";
            break;
            case $imc >= 17 and $imc <= 18.4:
                echo "Abaixo do peso";
             break;
             case $imc >= 18.5 and $imc <= 24.9:
                echo "Peso normal";
             break;
             case $imc >= 25 and $imc <= 29.9:
                echo "Acima do peso";
             break;
             case $imc >= 30 and $imc <= 34.9:
                echo "Obesidade grau 1";
             break;
             case $imc >= 35 and $imc <= 40:
                echo "Obesidade grau 2";
             break;
             case $imc > 40:
                echo "Obesidade grau 3";
             break;

        }
    ?>
</body>
</html>