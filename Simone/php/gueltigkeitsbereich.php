<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Var in funk - gültigkeitsbereich</title>
    
</head>
<body>
    
    <h1>variablen innen aussen</h1>
<?php
  //  $GLOBALS['$var_aussen'] = "test";
   $var_aussen = "test ";
    
    function test_funktion()
    {
   //   echo $GLOBALS['$var_aussen']; 
        global $var_aussen;
        echo $var_aussen; 
        global $var_innen;
        $var_innen = "Test2 ";
        
     //   $GLOBALS['$var_innen'] = "Test2";
    }

    test_funktion();
  //  echo $GLOBALS['$var_innen'];
    echo $var_innen;
?>
</body>
</html>