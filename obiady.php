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
                Tu znajdziesz przepisy na najlepsze obiady
            </lh>
            <li><a href="https://ciastonapizze.pl/z-piwem/" class="a-sub">Pizza</a>
                <img src="pizza.jpg" alt="Pizza" class="ciasta-zdj">
            </li>
            <li><a href="https://www.kwestiasmaku.com/pasta/lasagne_bolognese/przepis.html" class="a-sub">Lasagne</a>
                <img src="lasagne.jpg" alt="Lasagne" class="ciasta-zdj">
            </li>
            <li><a href="https://kulinarneprzeboje.pl/rosol/" class="a-sub">Rosół</a>
                <img src="rosol.jpg" alt="Rosół" class="ciasta-zdj">
            </li>
        </ul>
    </div>

    </section>

    <?php
        include_once("footer.php")
    ?>
</body>
</html>