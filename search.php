<?php
    //pobranie wartośći z form//
    $slowo_klucz = isset($_REQUEST['slowoKlucz'])? $_REQUEST['slowoKlucz']: "";
    echo $slowo_klucz;
    //ponranie wartośći z bazy danych//
    include_once('config.php');
    try {
        $conn = mysqli_connect($servername, $username, $passwordDB, $database);
        echo "Połączenie udane";
        
        $sql = "SELECT 'Nazwa' FROM 'dbo.przepisy' where 'Name' LIKE %'$slowo_klucz'%";

        $wyniksql = mysqli_query($conn, $sql);
    
        $rekordy = mysqli_fetch_assoc($wyniksql);

        while($rekordy != null){
            echo $rekordy['name'];
            $rekordy = mysqli_fetch_assoc($wyniksql);
        }
        mysqli_close($conn);
    }
    catch(Exception $e) {
        echo "Operacja nie udana" . $e->getMessage() . "<br>";
    }           
?>
