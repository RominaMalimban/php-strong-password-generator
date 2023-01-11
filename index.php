<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Strong Password Generator</title>

    <?php
    $length = $_GET['pwd-length'] ?? 0;

    // var_dump($length);
    
    function generateRanPwd($length)
    {
        // caratteri inclusi nella password:
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!?$?%^&*()_-+={[}]:;@#|\<,>.?/';

        // salvo la lunghezza della stringa $characters:
        $lengthChars = strlen($characters);

        // Inizializzo la variabile come stringa vuota che utilizzo per memorizzare la password generata: 
        $randomPwd = '';

        // ciclo for per generare la password:
        for ($i = 0; $i < $length; $i++) {
            $randomPwd .= $characters[rand(0, $lengthChars - 1)];
        }

        return $randomPwd;
    }
    ;
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