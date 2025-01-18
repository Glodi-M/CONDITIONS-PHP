<?php
$action = (int)readline("Enter the action: 1. Attaquer, 2. Défendre, 3. Passer son tour\n");


// Avec un switch
switch($action){
    case 1:
        echo 'J\'attaqye';
        break;
    case 2:
        echo 'Je défends';
        break;
    case 3: 
        echo 'Je passe mon tour';
        break;  
    default:
        echo 'Action inconnue';
        break;
}



/*
// Avec un if  
if($action === 1){
    echo 'J\'attaque';
} elseif($action === 2){
    echo 'Je défends';
} elseif($action === 3){
    echo 'Je passe mon tour';
} else {
    echo 'Action inconnue';
}
*/