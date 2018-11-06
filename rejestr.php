
<html>
<head>
<meta charset="UTF-8">
<title>Przyklad</title>
<link rel="stylesheet" href="cssss.css" type="text/css">
</head>
<body>

<?php

if ((!empty($_POST['imie'])) && (!empty($_POST['nazw'])) && (!empty($_POST['zawod'])) && (!empty($_POST['plec'])) && (!empty($_POST['login'])) && (!empty($_POST['haslo'])))
 {
    echo '</pre>';
     
$imie=$_POST['imie'];
$nazw=$_POST['nazw'];
$zawod=$_POST['zawod'];
$plec=$_POST['plec'];
$login=$_POST['login'];
$haslo=$_POST['haslo'];
 
echo "Konto ".$login." zostało zarejestrowane";
 
$polaczenie=mysqli_connect("localhost", "root", "", "rejestracja");

mysqli_select_db($polaczenie, "rejestracja");

$zapytanie1=mysqli_query($polaczenie, "insert INTO uzytkownicy VALUES('', '".$imie."', '".$nazw."', '".$zawod."', '".$plec."');");
$zapytanie2=mysqli_query($polaczenie, "insert INTO konta VALUES('', '".$login."', '".$haslo."');");

mysqli_close($polaczenie);
 } else echo "proszę wypełnić wszystkie pola";
 
?>


</body>
</html>
