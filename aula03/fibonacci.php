<?php
echo "Primeiro Loop: <br><br>";

$y = array("0", "1", "1", "2", "3", "5", "8", "13", "21", "34");

for($x = 0; $x < count($y); $x++){
echo $y[$x] , "<br>";
}

echo "<br>Segundo Loop: <br><br>";

$x = 0;

while($x < count($y)){
    echo $y[$x] , "<br>";
    $x++;
}
?>