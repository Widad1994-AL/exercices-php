<?php



function somme_chiffres($n) {
    $somme = 0; 

    while ($n > 0) {
        $somme += $n % 10; 
        $n = intval($n / 10); 
    }

    return $somme; 
}

$nombre = 20432;
echo "La somme des chiffres de $nombre est : " . somme_chiffres($nombre);

?>

