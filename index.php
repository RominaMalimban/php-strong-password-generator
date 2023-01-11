<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Strong Password Generator</title>

    <!-- includo file helper.php contente logica -->
    <?php
    require_once __DIR__ . "/partials/helper.php";
    ?>

</head>

<body>
    <form>
        <label for="pwd-length">Choose your password length:</label>
        <input type="number" name="pwd-length" min="7" max="15" placeholder="Min 7 Max 15">
        <input type="submit" value="Genera">
    </form>

    <span>La password generata è:
        <?php echo generateRanPwd($length) ?>
    </span>
</body>

</html>