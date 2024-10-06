<?php

session_start();

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php

        if (isset($_GET["p"])) $p = $_GET["p"];
        else                   $p = ""        ;

        if ($p == "bejelentkezes") $cim = "LiftZone | Bejelentkezes" ; else
        if ($p == "regisztracio")  $cim = "LiftZone | Regisztráció"  ; else
        if ($p == "")              $cim = "LiftZone | Kezdőlap"      ; else
                                   $cim = "LiftZone | 404"           ;
                                   
    ?>

    <title><?= $cim; ?></title>  
    <link rel="stylesheet" href="index.css">  

</head>

<body>

    <div id="menu">
        <div id="centered-links">
            <a href="./">Kezdőlap</a>
            <?php
            if(!isset($_SESSION["uid"])) {
                echo '<a href="./?p=bejelentkezes">Bejelentkezés</a>';
            } else {
                echo '<a href="./?p=kijelentkezes">Kijelentkezés</a>';
            }
            ?>
            <a href="./?p=regisztracio">Regisztráció</a>
        </div>
        <a href="./?p=profil" id="profile_icon"><img src="kepek/profil.jpg" id="kep"></a>
    </div>

    <?php

        if (isset($_GET["p"])) $p = $_GET["p"];
        else                   $p = ""        ;

        if ($p == "bejelentkezes")  include("login.php"  )              ; else
        if ($p == "regisztracio" )  include("signup.php" )              ; else
        if ($p == "kijelentkezes")  include("logout.php" )              ; else
        if ($p == "profil")         include("profile.php")              ; else
        if ($p == ""             )                                      ; else
                                    print "<h1>404</h1>"                ;
                                   
    ?>

    <script src="pic_change.js"></script>

</body>

</html>