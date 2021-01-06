<?php   
    // On créer le tableau d'erreur
    include('assets/php/errorchart.php');
    // On valide les données
    include('assets/php/validate_form.php');

// On test si des informations ont été envoyé grace à la supervariable $_SERVER et qu'il n'y a pas d'erreur ($error = false)
    if($_SERVER['REQUEST_METHOD']=='POST' && !$error){
        include('resultats.php');
    }else{
        include('form.php');
    }
?>

