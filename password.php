<?php

//$password = readline(" Inserisci la tua password: \n");


// controllo se la password contenga almeno 8 caratteri

function checkLength($string){  // questa funzione ha come entrata una stringa, e controlla la lunghezza password

    if(strlen($string)>=8){
        return true;
    }

    echo "La password deve contenere almeno 8 caratteri \n";
    return false;
}

//$firstrule = checkLength($password); // variabile d'appoggio che richiama la funzione checkLenght() con ingresso il parametro reale, ossia $password
//var_dump($firstrule);










// almeno una lettera maiuscola

function checkUppercase($string){

    for( $i=0; $i<strlen($string); $i++ ) {   // ciclo che si ripete per ogni lettera della nostra password finche non è minore della lunghezza della password che controllo con strlen, e incrementa a ogni giro

    if(ctype_upper($string[$i])){
        return true;
    }  // ctype_upper : build function di php verifica se il carattere è maiuscolo o no a ogni lettera tramite [$i]
}

echo "Manca una lettera maiuscola \n";
return false;
}

///$secondrule = checkUppercase($password);
//var_dump($secondrule);










// almeno un numero 
function checkNumber($string){

    for( $i=0; $i<strlen($string); $i++ ) {

       if(is_numeric($string[$i])) { // build function-->  is_numeric    controlla se il singolo carattere ciclato è un numero oppure no, 

        return true;
       }

    }

    echo "Almeno un carattere numerico \n";
    return false;
}

//$thirdrule = checkUppercase($password);
//var_dump($thirdrule);
















//// almeno un carattere speciale
function checkSpecial($string){

    $special_chars = ['!' , '@' , '$'];  // ci creiamo un array di caratteri speciali

    for( $i=0; $i<strlen($string); $i++ ) {

       if(in_array($string[$i], $special_chars)) { // verifichiamo se man mano ogni carattere ciclato sia presente o no il carattere speciale contenetne nell array special
        return true;  // in_array   ------> build function
       }

    }

    echo "Almeno un carattere speciale \n";
    return false;
}
//$fourthrule = checkSpecial($password);
//var_dump($fourthrule);








// funzione finaleee


function checkPassword($string){  // funzione che richiama tutte e 4 le funzioni create prima

    $firstrule = checkLength($string);
    $secondrule = checkUppercase($string);
    $thirdrule = checkNumber($string);
    $fourthrule = checkSpecial($string);

    if( $firstrule && $secondrule && $thirdrule && $fourthrule ){

        echo " Password ok \n";

    }

    return $firstrule && $secondrule && $thirdrule && $fourthrule;  // altrimenti ritorneremo la funzione in se
    // se tutte le precedenti funzioni ritornano true allora anche l ultima funzione ritorna true, se anche solo una delle funzioni sara false allora il return della funzione sara false
}







$password = readline(" Inserisci la tua password: \n");
var_dump(checkPassword($password));


do{  //

    $password = readline(" Inserisci la tua password: \n");

} while(!checkPassword($password));   // la password dovra essere reinserita finche il risultato di checkPassword sarà false











