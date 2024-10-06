<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="log_reg_profile.css">
</head>
<body>

    <?php 
    $unick = isset($_SESSION["unick"]) ? $_SESSION["unick"] : "";
    $uemail = isset($_SESSION["uemail"]) ? $_SESSION["uemail"] : "";
    $upw = isset($_SESSION["upw"]) ? $_SESSION["upw"] : "";
    $ubirth = isset($_SESSION["ubirth"]) ? $_SESSION["ubirth"] : "";
    ?>

    <div class="container">
        <h2>Profil</h2>
        <form id="profileForm" action="process_profile.php" method="POST">
            <label for="username">Felhasználónév</label>
            <input type="text" id="username" name="username" value="<?php echo $unick; ?>">

            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="<?php echo $uemail; ?>">

            <label for="password">Jelszó</label>
            <input type="password" id="password" class="eye" name="password" value="<?php echo $upw; ?>">

            <label for="dateofbirth">Születési dátum</label>
            <input type="date" id="dateofbirth" name="dateofbirth" value="<?php echo $ubirth; ?>">

            <button type="button" onclick="checkChanges()">Mentés</button>
        </form>
    </div>

    <script>
        const originalUsername = '<?php echo $unick; ?>';
        const originalEmail = '<?php echo $uemail; ?>';
        const originalPassword = '<?php echo $upw; ?>';
        const originalBirthdate = '<?php echo $ubirth; ?>';

        function checkChanges() {
            const username = document.getElementById("username").value;
            const email = document.getElementById("email").value;
            const password = document.getElementById("password").value;
            const birthdate = document.getElementById("dateofbirth").value;

            if (username !== originalUsername || email !== originalEmail || password !== originalPassword || birthdate !== originalBirthdate) {
                let confirmation = confirm("Biztosan menteni szeretné a változtatásokat?");
                if (confirmation) {
                    document.getElementById("profileForm").submit();
                }
                else {
                    alert("A módosításokat nem mentettük.");
                }
            }
            else {
                alert("Nincs változás a profil adataiban.");
            }
        }
    </script>

</body>
</html>