<?php
$namen=array("Peter", "Paul", "Pascal", "Fred","Ronaldo");
$anzahl=count($namen);
sort($namen);

for ($i=0;$i!=$anzahl;$i++){
    echo $namen[$i] ."<br />";
    }
?>