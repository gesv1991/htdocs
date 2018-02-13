<?php

function namensausgabe($name, $alter){
    $satz = "Mein Name ist $name, ich bin $alter Jahre alt.";
    return $satz;
}

$irgendetwas = "Ronald";
$etwasanderes = 21;
echo namensausgabe("Peter", 30);
?>