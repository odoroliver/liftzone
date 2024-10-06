<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="log_reg_profile.css">

</head>

<body>

    <div class="container"> 
        <h2>Regisztráció</h2>
        <form action="process_signup.php" method="POST">
            <label for="username">Felhasználónév</label>
            <input type="text" id="username" name="username">

            <label for="email">Email</label>
            <input type="email" id="email" name="email" novalidate>

            <label for="password">Jelszó</label>
            <input type="password" id="password" class="eye" name="password">

            <label for="retype_password">Jelszó megerősítése</label>
            <input type="password" id="retype_password" class="eye" name="retype_password">

            <label for="dateofbirth">Születési dátum</label>
            <input type="date" id="dateofbirth" name="dateofbirth">

            <button type="submit">Regisztráció</button>
        </form>
        <p>Van már fiókod? <a href="./?p=bejelentkezes">Jelentkezz be itt</a>.</p>
    </div>

</body>

</html>