<!DOCTYPE html>
<html>
    <head>Profil</head>
    <body>
        <?php
            include('config.php');
            try{
                $conn = mysqli_connect($servername, $username, $password, $database );
                echo "udało się połączyć";
                $_SESSION['timeStamp']=time();
                $loginDB = $_SESSION['loginDB'];
                var_dump($loginDB);
                $passwordDB = $_SESSION['passwordDB'];
                var_dump($passwordDB);

                 $selectQuery = "SELECT * FROM `danelogowania` WHERE login = '$loginDB'";
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