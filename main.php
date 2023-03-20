<!DOCTYPE html>
<html lang="pl">
<head>
    <title>Blog kulinarny</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <?php
        include_once("header.php")
    ?>
    <section name="główna">
        <div name="panel lewy">

        </div>

        <div name="panel górny prawy">

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