<?php
ini_set('display_errors',0);
ini_set('display_startup_erros',0);
error_reporting(0);
$nu = "26";
$ld0 = 0;
$handle = fopen("valorreferencia/media/potencia_sinal_m_referencia_canal$nu.txt", "r");
if ($handle) {
    while (($line = fgets($handle)) !== false) {
        $ld0 = $line;
    }
    fclose($handle);
} else {
    // error opening the file.
}

$manipular = fopen("valorn/canal$nu.txt", "a+b");
$handle = fopen("potencia_sinal_m_canal$nu.txt", "r");
if ($handle) {
    $d = 5;
    while (($line = fgets($handle)) !== false) {
        echo -($line - $ld0)/(10 * log10($d));
        echo "\n";
        fwrite($manipular, -($line - $ld0)/(10 * log10($d)));
        fwrite($manipular, "\n");
        $d += 5;
    }

    fclose($handle);
    fclose($manipular);
} else {
    // error opening the file.
}
