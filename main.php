<!DOCTYPE html>
<html lang="pl">
<head>
    <title>Blog kulinarny</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body class="main">
    <?php
        include_once("header.php")
    ?>
    <section name="główna">

        <nav>

            <ul class="ul">
                <li class="li">
                    <a href="main.php">Menu:</a>
                </li>
                <li class="li">
                    <form action="index.php">
                        <input type="text" placeholder = "Szukaj">
                        <input type="image" src="lupa.jpg" width="20px" hight="15px" alt="Submit">
                    </form> 
                </li>
                <li class="li">
                    <a href="info.php">Informacje</a>
                </li>
                <li class="li">
                    <a href="profile.php">Profil</a>
                </li>
            </ul>
        </nav>
        
        <nav class="menu">
        <ul>
           <li class="limenu"><a href="ciasta.php">Ciasta</a></li>
           <li class="limenu"><a href="obiady.php">Obiady</a></li>
           <li class="limenu"><a href="przekąski.php">Przekąski</a></li>
        </ul>
        </nav>


       

        <div name="panel prawy duży">
            <?php
                include_once("slideshow.php")
            ?>
        </div>

    </section>

    <?php
        include_once("footer.php")
    ?>
</body>
</html>


<tr><td><a href="main.php">Menu:</a></td></tr>
<tr><td><iframe src="ciasta.php" height="200" width="300">Ciasta</iframe></td></tr>
<tr><td><iframe src="obiady.php" height="200" width="300">Obiady</iframe></td></tr>
<tr><td><iframe src="przekąski.php" height="200" width="300">Przekąski</iframe></td></tr>