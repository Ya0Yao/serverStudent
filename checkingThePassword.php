<?php
session_start();
$username = isset($_REQUEST["login"]) ? $_REQUEST['login'] :'';
$password = isset($_REQUEST["password"]) ? $_REQUEST['password'] :'';


$conn = ldap_connect("ldap://WIN-JLAE8VSR9JN.student.student")
or die ("błedne logowanie");
ldap_set_option($ldap_conn,LDAP_OPT_PROTOCOL_VERSION, 3);
if($conn){
    $ldapbind = ldap_bind($ldapconn, $username."@student.student", $password);
    if ($ldapbind) {
        // Pobieramy hash hasła z AD dla użytkownika
        $result = ldap_search($ldapconn, "DC=student,DC=student", "(sAMAccountName=".$username.")", array("unicodePwd"));
        $entries = ldap_get_entries($ldapconn, $result);
        $unicode_pwd = $entries[0]["unicodepwd"][0];

        // Konwertujemy wartość hasła z AD na postać binarną
        $pwd = hex2bin(bin2hex($unicode_pwd));

        // Obliczamy hash wprowadzonego przez użytkownika hasła
        $hashed_pwd = hash("sha1", iconv("UTF-8", "UTF-16LE", $password), true);

        // Porównujemy hasze
        if ($hashed_pwd === $pwd) {
            header("location:'main.php'");
        } else {
            header("location:'index.php'");
        }
    }
    ldap_close($ldapconn);
} 
?>
