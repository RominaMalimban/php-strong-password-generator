<?php

// scelta utente: 
$length = $_GET['pwd-length'] ?? 0;

// funzione per generare random password:
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