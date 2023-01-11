<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Php Strong Password Generator</title>

    <?php

    // inizializzo la session:
    session_start();

    // includo file helper.php contente logica:
    require_once __DIR__ . "/partials/helper.php";
    ?>
</head>

<body>
    <div class="container">
        <h1>Strong Password Generator</h1>
        <form>
            <label for="pwd-length">Choose your password length:</label>
            <input type="number" name="pwd-length" min="7" max="15" placeholder="Min 7 Max 15">
            <input type="submit" value="Genera" class="btn">
        </form>

        <?php

        if ($length) {

            $_SESSION['pwd'] = generateRanPwd($length);
            header('Location: pwdGenerated.php');
        }
        ?>
    </div>
</body>

</html>