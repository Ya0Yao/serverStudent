<?php
    session_start();
    // $loginDB = $_REQUEST["login"];
    // $passwordDB = $_REQUEST["password"];
    $login = isset($_REQUEST["login"]) ? $_REQUEST['login'] :'';
    $password = isset($_REQUEST["password"]) ? $_REQUEST['password'] :'';

    // var_dump($loginDB);
    // var_dump($passwordDB);
   

    include('config.php');

    try{
        $conn = mysqli_connect($servername, $username, $passwordDB, $database );
        echo "udało się połączyć";

        $selectQuery = "SELECT * FROM `danelogowania` WHERE login = '$login'";
        $selectDATA = mysqli_query($conn, $selectQuery);
        $selectAssoc=mysqli_fetch_assoc($selectDATA);

        if($selectAssoc != null){

            $passwordDATA = $selectAssoc['password'];
            if($passwordDB ==$passwordDATA){
                $_SESSION['timeStamp']=time();
                $_SESSION['login'] = $login;
                $_SESSION['password'] = $password;
                header("location:'main.php'");
            }else{echo "błędne hasło";}
        }else{echo "błędny login lub nie ma takiego uzytkownika";}
    


    }catch (Exception $e){
        echo "błąd !". $e->getMessage();
    }
    mysqli_close($conn);
?>