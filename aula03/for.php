<?php
for($x = 0; $x <= 10; $x++){
    echo "Número: $x <br>";
}

$pokemons = array("Charmander", 
        "Pikachu", 
        "Eevee", 
        "Squirtle", 
        "Dragonite");

echo count($pokemons);

for($x = 0; $x < count($pokemons); $x++){
    echo $pokemons[$x] , "<br>";
}

?>
<!-- O for tem 3 parâmetros: 
    1. Inicializar um contador; 
    2. Declarar uma condição para o contador; 
    3. Adiciona um incremento ou decremento.
    
    O count serve para contar o número de elementos de um array.
-->