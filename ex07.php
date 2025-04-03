<?php

$n=6;
function factorielle($n){

$fact=1;

for($i=1;$i<=$n;$i++) {
$fact*=$i;

}
return$fact;

}

echo"la factorielle de $n est :".factorielle($n);

?>




