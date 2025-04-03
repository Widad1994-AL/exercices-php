<?php

funvtion palindrome($chaine){

    $inverse=strrev($chaine);

if($chaine===$inverse){

return"oui , '$chaine' est un palindrome"
}else{
    return"non,$chaine' n'est pas un palindrome";
}


echo estpalindrome("radar");
echo"\n";
echoestpalindrome("hello");


}

?>







// Exercice 9 : Vérifier si un mot est un palindrome.
// Pseudo-code :
// inverser le mot
// si mot == mot inversé alors
//   afficher 'palindrome'
// sinon
//   afficher 'non'

