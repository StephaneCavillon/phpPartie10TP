<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){    
    include('assets/php/regexp.php');


    // création d'une fonction de nettoyage de base
    function valid_data($data) {
        // supprime les espaces inutiles (débub et fin)
        $data = trim($data);
        // supprime les \
        $data = stripslashes($data);
        // échappe les caractères spéciaux
        $data = htmlspecialchars($data);
        return $data;
    }

    // validation des champs un par un
    if(!empty($_POST['name'])){
        //nettoyage de la donnée
        $name = valid_data($_POST['name']);
        // équivalent de htmlspecialchars() avec ENT_QUOTES
        // $name = filter_var($name, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        $name = filter_var($name, FILTER_SANITIZE_STRING);
        
        //test de la donnée
        $test_regex = preg_match($regex_name, $name);
        if($test_regex !== 1){
            $error_array['error_name']->_active = true;
        }else{
            // On pourrait enregistrer dans la BDD par exemple
        }

    }else{}

    if(!empty($_POST['lastname'])){
        $lastname = valid_data($_POST['lastname']);

        $lastname = filter_var($lastname, FILTER_SANITIZE_STRING);

        //test de la donnée
        $test_regex = preg_match($regex_name, $lastname);
        if($test_regex !== 1){
            $error_array['error_lastname']->_active = true;
        }else{
            // On pourrait enregistrer dans la BDD par exemple
        }
    }else{}

    if(!empty($_POST['birthDate'])){
        $birthDate = valid_data($_POST['birthDate']);

        //test de la donnée
        $test_regex = preg_match($regex_date, $birthDate);
        if($test_regex !== 1){
            $error_array['error_birthDate']->_active = true;
        }else{
            // On pourrait enregistrer dans la BDD par exemple
        }
    }else{}

    if(!empty($_POST['birthCountry'])){
        $birthCountry = valid_data($_POST['birthCountry']);

        // équivalent de htmlspecialchars() avec ENT_QUOTES
        $birthCountry = filter_var($birthCountry, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        //test de la donnée
        $test_regex = preg_match($regex_name, $birthCountry);
        if($test_regex !== 1){
            $error_array['error_birthDate']->_active = true;
        }else{
            // On pourrait enregistrer dans la BDD par exemple
        }
    }else{}



    // vérification de l'état des erreurs dans le tableau d'erreur
    $error_array['error_name']->_active = true;
    foreach ($error_array as $key => $value) {
        if($key->_active == true){
            $error = true;
        }
    }













    // test des champs obligatoire et mise en variable 
    // if(!empty($_POST['name']) && !empty($_POST['lastname']) && !empty($_POST['birthDate']) && !empty($_POST['nation']) && !empty($_POST['adresse_number']) && !empty($_POST['road_name']) && !empty($_POST['postal_code']) && !empty($_POST['city']) && !empty($_POST['mail']) && !empty($_POST['phone']) && !empty($_POST['job_number'])){
      
    //     $name = valid_data($_POST['name']);
    //     $lastname = valid_data($_POST['lastname']);
    //     $birthDate = valid_data($_POST['birthDate']);
    //     $nation = valid_data($_POST['nation']);
    //     $adresse_number = valid_data($_POST['adresse_number']);
    //     $road_name = valid_data($_POST['road_name']);
    //     $postal_code = valid_data($_POST['postal_code']);
    //     $city = valid_data($_POST['city']);
    //     $mail = filter_var(valid_data($_POST['mail']), FILTER_SANITIZE_EMAIL);
    //     $phone = valid_data($_POST['phone']);
    //     $job_number = valid_data($_POST['job_number']);

    // } else {
   // if(isset($_POST[]))
}
?>