<?php   
    // On créer le tableau d'erreur
    include('assets/php/errorchart.php');
    
    
    // On valide les données
    // test du changement de la variable $error en fonction de toute les error_->_active de errorchart
    // echo 'error_name base';
    // var_dump($error_array['error_name']->_active);
    include('assets/php/validate_form.php');
    // echo '$error ';
    // var_dump($error);

// On test si des informations ont été envoyé grace à la supervariable $_SERVER et qu'il n'y a pas d'erreur ($error = false)
    if($_SERVER['REQUEST_METHOD']=='POST' && !$error){
        include('resultats.php');
    }else{
        include('form.php');
    }
?>

