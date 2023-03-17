<html>
    <head>
        <title>Strona główna</title>
        <link rel="stylesheet" href="style.css">

    </head>
    <body>
       <?php
          include_once "header.php";
       ?>
        <?php
            include_once "config.php";
            $conn = null;
            try{

                $conn = mysqli_connect($servername, $username, $password, $database );
                echo "połączenie udane <br>";

                $sqlSelect = " SELECT * FROM uwagi;";
                $wynikSelect = mysqli_query($conn, $sqlSelect);
                $liczbaRekordow = mysqli_num_rows($wynikSelect);

                

               

            }catch(Exception $e){
                echo "błąd połączenia";

            }


        ?>

        <?php
            include_once "footer.php";
       ?> 
    </body>
</html>