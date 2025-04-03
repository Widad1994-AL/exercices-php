<?php

function inverser_chaine($str){
    $inverse='';

  for($i=strlen($str)-1;$i>=0;$i--)  {

    $inverse .= $str[$i];

  }
    
    return $inverse;

}

$chaine = "Bonjour";
echo "La chaîne inversée est : " . inverser_chaine($chaine);

?>


