<?php
$pokemons = array("Charmander", "Pikachu", "Eevee", "Squirtle", "Dragonite");

foreach($pokemons as $pokemon){
    if($pokemon !== "Charmander"){
        echo $pokemon . "<br>";
    }
}
?>