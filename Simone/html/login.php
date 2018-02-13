<?php //login.php Eingabe überprüfen 
header("Cache-Control: no-cache, must-revalidate");  
$vUser = ""; 
$vPassword = ""; 
$msg = " "; 
session_start(); 

if (isset($_POST["submit"])) 
{ 
  $vUser = trim($_POST["tUser"]); 
  $vPassword = ($_POST["tPassword"]); 
  if (($vUser != "1")||($vPassword != "1")) 
  { 
    $msg = "Username oder Password sind ungültig" ; 
      $_SESSION["pwd"] = ""; 
  } 
  else 
  { 
    $_SESSION["pwd"] = $vPassword; 
    $insertGoTo = "artikel.php";  
    header(sprintf("Location: %s", $insertGoTo)); 
        exit; 
  }  
} 

if (isset($_POST["cancel"])) 
{ 
  $insertGoTo = "http://www.google.ch";  
  header(sprintf("Location: %s", $insertGoTo)); 
    exit; 
} 
?> 


<!doctype html>

<html> 
<head>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style_userform.css"> 
    <title>login</title></head> 
<body onLoad = "document.form1.tName.focus()"> 
<p></p> 
<form name = " form1" method = "post" action = ""> 
  <p>User: 
    <input type="text" name = "tUser" value = "<?php echo $vUser ?>">  
    Testuser: 1 </p> 
  <p>Password :  
    <input type="password" name = "tPassword" value = "">  
    Testpassword: 1 </p> 
  <p><input type="submit" name = "submit" value = "Login">   
  <input type="submit" name = "cancel" value = "Abbrechen"> </p> 
  <p><? echo . $msg ?> </p> 
</form> 
</body> 
</html>