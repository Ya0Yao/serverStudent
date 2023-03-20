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
        <div name="panel lewy">

        <div name="panel prawy górny">
            <table>
                <tr><td><form action="search.php">
                            <input type="text" placeholder = "Szukaj">
                            <input type="submit" value="<img src='lupa.jpg' alt='Szukaj'>">
                        </form> 
                    </td>
                    <td>
                        <a href="info.php">Informacje</a>
                    </td>
                    <td>
                        <a href="profile.php">Profil</a>
                    </td>
                </tr>
            </table>

            <table>
                <tr><td><a href="main.php">Menu:</a></td></tr>
                <tr><td><a href="ciasta.php">Ciasta</a></td></tr>
                <tr><td><a href="obiady.php">Obiady</a></td></tr>
                <tr><td><a href="przekąski.php">Przekąski</a></td></tr>
            </table>
        </div>


        </div>

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