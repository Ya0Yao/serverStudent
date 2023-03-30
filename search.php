<?php
    //pobranie wartośći z form//
    $slowo_klucz = isset($_REQUEST['slowoKlucz'])? $_REQUEST['slowoKlucz']: "";
    //ponranie wartośći z bazy danych//
    include_once('config.php')
    try {
        $conn = mysqli_connect($servername, $username, $passwordDB, $database);
        echo "Połączenie udane";
        
        $sql = "SELECT * FROM dbo.przepisy";
        
        $wyniksql = mysqli_query($conn, $sql);
    
        mysqli_close($conn);
    
        $liczbarek = mysqli_num_rows($wyniksql);
    
        if($liczbarek > 0){
            echo "Pobrano". $liczbarek . "rekordów";
    
            $rekordy = mysqli_fetch_assoc($wyniksql);
    
        }else{
            echo "Błąd, pobrano 0 rekordów";
        }
        mysqli_close($conn);
    } 
    catch(Exception $e) {
        echo "Operacja nie udana" . $e->getMessage() . "<br>";
    }
    
            
?>
