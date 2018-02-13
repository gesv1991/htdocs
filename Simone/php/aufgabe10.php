<?php
$datei1 = fopen("content.txt", "r");
$output = fgets($datei1);
//echo md5_file("content.txt");

//prüft ob die aktuelle hashfunktion die selbe ist wie am Anfang.
if (md5_file("content.txt")=="167e641bf90485a1931c9f3fc67392db"){
	echo "Die Datei ist gleich. <br/>";
}
else{
	echo "Die Datei wurde verändert <br/>";
}
?>