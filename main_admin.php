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
            <a href="main_admin.php" class="a-main" id="lista_hover">Menu:</a>
        </li>
        <li class="nav-li-gora">
            <form action="search.php">
                <input type="text" placeholder = "Szukaj" name="slowoKlucz">
                <input type="image" src="lupa.png" width="20px" hight="15px" alt="Submit">
            </form> 
        </li>
        <li class="nav-li-gora">
            <a href="edit.php" class="a-main" id="lista_hover">Edytor strony</a>
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

    <?php
        include_once("slideshow.php")
    ?>

    </section>

    <?php
        include_once("footer.php")
    ?>

</body>
</html>