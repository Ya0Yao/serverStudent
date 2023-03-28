<!DOCTYPE html>
<html lang="pl">
<head>
    <title>Logowanie2</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body class="index">
    <h1>Logowanie</h1>
    <form action="main.php" method="get"> <!--zmiana lokalizacji wysłania formularza!!! -->
        <input type="text" name="login" placeholder="Adres e-mail" required="required"><br>
        <input type="text" name="password" placeholder="Hasło" required="required"><br>
        <input type="submit" value="Zaloguj" class="button">
    </form>
</body>
</html>