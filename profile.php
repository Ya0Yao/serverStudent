<!DOCTYPE html>
<html>
    <head>Profil1</head>
    <body>
        <?php
            include('config.php');
            try{
                $conn = mysqli_connect($servername, $username, $passwordDB, $database );
                echo "udało się połączyć";
                $_SESSION['timeStamp']=time();
                $login = $_SESSION['login'];
                var_dump($login);
                $password = $_SESSION['password'];
                var_dump($password);

                 $selectQuery = "SELECT * FROM `danelogowania` WHERE login = '$login'";
                $selectDATA = mysqli_query($conn, $selectQuery);
                $selectAssoc=mysqli_fetch_assoc($selectDATA);
                var_dump($selectAssoc);
        
        
            }catch (Exception $e){
                echo "błąd !". $e->getMessage();
            }
            // mysqli_close($conn);
        ?>
    </body>
</html>