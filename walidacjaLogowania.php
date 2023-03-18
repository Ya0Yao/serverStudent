<?php
    session_start();
    // $loginDB = $_REQUEST["login"];
    // $passwordDB = $_REQUEST["password"];
    $loginDB = isset($_REQUEST["login"]) ? $_REQUEST['login'] :'';
    $passwordDB = isset($_REQUEST["password"]) ? $_REQUEST['password'] :'';

    // var_dump($loginDB);
    // var_dump($passwordDB);
   

    include('config.php');

    try{
        $conn = mysqli_connect($servername, $username, $password, $database );
        echo "udało się połączyć";

        $selectQuery = "SELECT * FROM `danelogowania` WHERE login = '$loginDB'";
        $selectDATA = mysqli_query($conn, $selectQuery);
        $selectAssoc=mysqli_fetch_assoc($selectDATA);

        if($selectAssoc != null){

            $passwordDATA = $selectAssoc['password'];
            if($passwordDB ==$passwordDATA){
                $_SESSION['timeStamp']=time();
                $_SESSION['loginDB'] = $loginDB;
                $_SESSION['passwordDB'] = $passwordDB;
                header("location:'main.php'");
            }else{echo "błędne hasło";}
        }else{echo "błędny login lub nie ma takiego uzytkownika";}
    


    }catch (Exception $e){
        echo "błąd !". $e->getMessage();
    }
    mysqli_close($conn);
?>