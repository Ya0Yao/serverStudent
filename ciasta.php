<!DOCTYPE html>
<html lang="pl">
<head>
    <title>Blog kulinarny</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styl.css">
</head>
<body class="main">
    <?php
        include_once("header.php")
    ?>
    <section name="główna" class="glowna">

        <nav class = "nav-gorny">
            <ul class="ul">
                <li class="li-menu">
                    <a href="main.php">Menu:</a>
                </li>
                <li class="li">
                    <form action="index.php">
                        <input type="text" placeholder = "Szukaj">
                        <input type="image" src="lupa.png" width="20px" hight="15px" alt="Submit">
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
        
        <nav class = "nav-lewy">
        <ul class="ul-lewy">
           <li class="nav-li-lewy"><a href="ciasta.php">Ciasta</a></li>
           <li class="nav-li-lewy"><a href="obiady.php">Obiady</a></li>
           <li class="nav-li-lewy"><a href="przekąski.php">Przekąski</a></li>
        </ul>
        </nav>

        <div class="slideshow-container ">
            <p>Tu znajdziesz przepisy na najlepsze ciasta</p><br>
            <ul>
                <li><a href="https://www.kwestiasmaku.com/przepis/sernik-tradycyjny">Sernik</a><br>
                <img src="sernik" alt="sernik">
                </li>
                <li><a href="https://domowe-wypieki.pl/przepisy/ciasta/812-prosta-szarlotka">Szarlotka</a><br>
                <img src="szarlotka" alt="szarlotka">
                </li>
                <li><a href="https://www.kwestiasmaku.com/przepis/beza">Beza owocowa</a><br>
                <img src="beza" alt="beza">
                </li>
            </ul>
        </div>

    </section>

    <?php
        include_once("footer.php")
    ?>
</body>
</html>