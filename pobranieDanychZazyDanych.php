<?php
$servername = "localhost";
$username = "root";
$passworddb = "";
$database = "demoad";

$login = $_REQUEST["login"];
$password = $_REQUEST["password"];

try{
    $conn = mysqli_connect($servername, $username, $passworddb, $database);

    $zapytanie = "SELECT * FROM danelogowania WHERE ";

    $wynikSql = mysqli_query($conn, $zapytanie);

    mysqli_close($conn);

    $rekordy = mysqli_fetch_assoc($wynikSql);

    $loginok = $rekordy["login"];
    $passwordok = $rekordy["password"];
    $role = $rekordy["role"]

}

    catch(Exception $e) {
        echo "Operacja nie udana" . $e->getMessage() . "<br>";
}

echo $login;
echo $password;
echo $loginok;
echo $passwordok;


// walidacja



if($login != $loginok){
    $blad = "Wpisz poprawny login";
}
if($password != $passwordok){
    $blad = "Wpisz poprawne hasło";
}
if($login != $loginok && $password != $passwordok){
    $blad = "Błędne dane logowania";
}else{
    if(role = 1){

    }
    if(role = 0){

    }
}
?>