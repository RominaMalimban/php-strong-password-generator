<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generated</title>

    <?php
    session_start();
    $password = $_SESSION['pwd'];
    require_once __DIR__ . "/partials/helper.php";
    ?>
</head>

<body>
    <span>La password generata è:
        <?php echo $password ?>
    </span>

    <a href="index.php">Genera nuova password</a>

</body>

</html>