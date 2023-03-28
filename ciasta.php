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
                    <a href="main.php" class="a-main">Menu:</a>
                </li>
                <li class="li">
                    <form action="index.php">
                        <input type="text" placeholder = "Szukaj">
                        <input type="image" src="lupa.png" width="20px" hight="15px" alt="Submit">
                    </form> 
                </li>
                <li class="li">
                    <a href="info.php" class="a-main">Informacje</a>
                </li>
                <li class="li">
                    <a href="profile.php" class="a-main">Profil</a>
                </li>
            </ul>
        </nav>
        
        <nav class = "nav-lewy">
        <ul class="ul-lewy">
           <li class="nav-li-lewy"><a href="ciasta.php" class="a-main">Ciasta</a></li>
           <li class="nav-li-lewy"><a href="obiady.php" class="a-main">Obiady</a></li>
           <li class="nav-li-lewy"><a href="przekąski.php" class="a-main">Przekąski</a></li>
        </ul>
        </nav>

        <div class="slideshow-container ">
            <p class="header-ciasta">Tu znajdziesz przepisy na najlepsze ciasta</p><br>
            <ul>
                <li><a href="https://www.kwestiasmaku.com/przepis/sernik-tradycyjny" class="a-sub">Sernik</a>
                <img src="sernik.jpg" alt="sernik" class="ciasta-zdj">
                </li>
                <li><a href="https://domowe-wypieki.pl/przepisy/ciasta/812-prosta-szarlotka" class="a-sub">Szarlotka</a>
                <img src="szarlotka.jpg" alt="szarlotka" class="ciasta-zdj">
                </li>
                <li><a href="https://www.kwestiasmaku.com/przepis/beza" class="a-sub">Beza owocowa</a>
                <img src="beza.jpeg" alt="beza" class="ciasta-zdj">
                </li>
            </ul>
        </div>

    </section>

    <?php
        include_once("footer.php")
    ?>
</body>
</html>