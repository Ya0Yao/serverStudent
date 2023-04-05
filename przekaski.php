<!DOCTYPE html>
<html lang="pl">
<head>
    <title>Blog kulinarny</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styl.css">
</head>
<body class="przekaski">
    <?php
        include_once("header.php")
    ?>
<section name="główna" class="glowna">

<nav class = "nav-gorny">
    <ul class="ul">
        <li class="li-menu">
            <a href="main_user.php" class="a-main" id="lista_hover">Menu:</a>
        </li>
        <li class="nav-li-gora">
            <form action="search.php">
                <input type="text" placeholder = "Szukaj" name="slowoKlucz">
                <input type="image" src="lupa.png" width="20px" hight="15px" alt="Submit">
            </form> 
        </li>
        <li class="nav-li-gora">
            <a href="info.php" class="a-main" id="lista_hover">Informacje</a>
        </li>
        <li class="nav-li-gora">
            <a href="profile.php" class="a-main" id="lista_hover">Profil</a>
        </li> 
    </ul>
</nav>

<nav class = "nav-lewy">
<ul class="ul-lewy">
   <li class="nav-li-lewy"><a href="ciasta.php" class="a-main" id="lista_hover">Ciasta</a></li>
   <li class="nav-li-lewy"><a href="obiady.php" class="a-main" id="lista_hover">Obiady</a></li>
   <li class="nav-li-lewy"><a href="przekaski.php" class="a-main" id="lista_hover">Przekąski</a></li>
</ul>
</nav>

    <div class="slideshow-container blur-list">
        <ul class="">
            <lh class="header-ciasta">
                Tu znajdziesz przepisy na najlepsze przekąski
            </lh>
            <li><a href="https://aniagotuje.pl/przepis/krazki-cebulowe" class="a-sub">Krążki cebulowe</a>
                <img src="cebulowe.jpg" alt="krążki cebulowe" class="ciasta-zdj">
            </li>
            <li><a href="https://beszamel.se.pl/przepisy/przystawki-i-przekaski/domowe-chipsy-ziemniaczane-jak-zrobic-chipsy-w-piekarniku-re-JwLT-fEsS-74pK.html" class="a-sub">Chipsy</a>
                <img src="chipsy.jpg" alt="chipsy" class="ciasta-zdj">
            </li>
            <li><a href="https://www.kwestiasmaku.com/przepis/churros" class="a-sub">Churros</a>
                <img src="churros.jpg" alt="churros" class="ciasta-zdj">
            </li>
        </ul>
            </ul>
    </div>

    </section>

    <?php
        include_once("footer.php")
    ?>
</body>
</html>