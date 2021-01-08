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
        //permet en même temps de vérifier si le champ existe
        // $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING)
        $name = trim(filter_var($_POST['name'], FILTER_SANITIZE_STRING));

        //nettoyage de la donnée
        $name = valid_data($name);
        // équivalent de htmlspecialchars() avec ENT_QUOTES
        // $name = filter_var($name, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        
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

        $birthCountry = filter_var($birthCountry, FILTER_SANITIZE_STRING);

        //test de la donnée
        $test_regex = preg_match($regex_country, $birthCountry);
        if($test_regex !== 1){
            $error_array['error_birthCountry']->_active = true;
        }else{
            // On pourrait enregistrer dans la BDD par exemple
        }
    }else{}

    if(!empty($_POST['nation'])){
        $nation = valid_data($_POST['nation']);

        $nation = filter_var($nation, FILTER_SANITIZE_STRING);

        //test de la donnée
        $test_regex = preg_match($regex_nation, $nation);
        if($test_regex !== 1){
            $error_array['error_nation']->_active = true;
        }else{
            // On pourrait enregistrer dans la BDD par exemple
        }
    }else{}

    if(!empty($_POST['adresse_number'])){
        $adresse_number = valid_data($_POST['adresse_number']);

        $adresse_number = filter_var($adresse_number, FILTER_SANITIZE_NUMBER_INT);

        //test de la donnée
        $test_regex = preg_match($regex_number, $adresse_number);
        if($test_regex !== 1){
            $error_array['error_adresse_number']->_active = true;
        }else{
            // On pourrait enregistrer dans la BDD par exemple
        }
    }else{}

    if(!empty($_POST['road_name'])){
        $road_name = valid_data($_POST['road_name']);

        $road_name = filter_var($road_name, FILTER_SANITIZE_STRING);

        //test de la donnée
        $test_regex = preg_match($regex_road, $road_name);
        if($test_regex !== 1){
            $error_array['error_road_name']->_active = true;
        }else{
            // On pourrait enregistrer dans la BDD par exemple
        }
    }else{}

    if(!empty($_POST['postal_code'])){
        $postal_code = valid_data($_POST['postal_code']);

        //test de la donnée
        $test_regex = preg_match($regex_postal_code, $postal_code);
        if($test_regex !== 1){
            $error_array['error_postal_code']->_active = true;
        }else{
            // On pourrait enregistrer dans la BDD par exemple
        }
    }else{}

    if(!empty($_POST['city'])){
        $city = valid_data($_POST['city']);

        $city = filter_var($city, FILTER_SANITIZE_STRING);

        //test de la donnée
        $test_regex = preg_match($regex_city, $city);
        if($test_regex !== 1){
            $error_array['error_city']->_active = true;
        }else{
            // On pourrait enregistrer dans la BDD par exemple
        }
    }else{}

    if(!empty($_POST['mail'])){
        $mail = valid_data($_POST['mail']);

        $mail = filter_var($mail, FILTER_SANITIZE_EMAIL);
        $mail = filter_var($mail, FILTER_VALIDATE_EMAIL);

        //test de la donnée
        $test_regex = preg_match($regex_mail, $mail);
        if($test_regex !== 1){
            $error_array['error_mail']->_active = true;
        }else{
            // On pourrait enregistrer dans la BDD par exemple
        }
    }else{}

    if(!empty($_POST['phone'])){
        $phone = valid_data($_POST['phone']);

        $phone = filter_var($phone, FILTER_SANITIZE_STRING);

        //test de la donnée
        $test_regex = preg_match($regex_phone, $phone);
        if($test_regex !== 1){
            $error_array['error_phone']->_active = true;
        }else{
            // On pourrait enregistrer dans la BDD par exemple
            // retourner la date pour l'afficher correctement dans les résultats
        }
    }else{}

    if(!empty($_POST['diplome'])){
        //  value = -1 +1 +2 ou +3
        $diplome = valid_data($_POST['diplome']);

        $diplome = filter_var($diplome, FILTER_SANITIZE_STRING);

        //test de la donnée
        $test_regex = preg_match($regex_diplome, $diplome);
        if($test_regex !== 1){
            $error_array['error_diplome']->_active = true;
        }else{
            // On pourrait enregistrer dans la BDD par exemple
            // Donner une valeur à $diplome pour l'utiliser dans resultats après
            switch($diplome){
                case -1:
                    $diplome = 'Sans diplome';
                    break;
                case +1:
                    $diplome = 'Bac';
                    break;
                case +2:
                    $diplome = 'Bac+2';
                    break;
                case +3:
                    $diplome = 'Bac+3';
                    break;
            }
        }
    }else{}

    if(!empty($_POST['job_number'])){
        $job_number = valid_data($_POST['job_number']);

        $job_number = filter_var($job_number, FILTER_SANITIZE_STRING);

        //test de la donnée
        $test_regex = preg_match($regex_job_number, $job_number);
        if($test_regex !== 1){
            $error_array['error_job_number']->_active = true;
        }else{
            // On pourrait enregistrer dans la BDD par exemple
        }
    }else{}

    if(!empty($_POST['badge_number'])){
        $badge_number = valid_data($_POST['badge_number']);

        // $badge_number = filter_var($badge_number, FILTER_SANITIZE_NUMBER_INT);

        //test de la donnée
        $test_regex = preg_match($regex_badge_number, $badge_number);
        if($test_regex !== 1){
            $error_array['error_badge_number']->_active = true;
        }else{
            // On pourrait enregistrer dans la BDD par exemple
        }
    }else{}

    if(!empty($_POST['codecademy_link'])){
        $codecademy_link = valid_data($_POST['codecademy_link']);

        $codecademy_link = filter_var($codecademy_link, FILTER_SANITIZE_URL);
        $codecademy_link = filter_var($codecademy_link, FILTER_VALIDATE_URL);


        //test de la donnée
        $test_regex = preg_match($regex_codecademy_link, $codecademy_link);
        if($test_regex !== 1){
            $error_array['error_codecademy_link']->_active = true;
        }else{
            // On pourrait enregistrer dans la BDD par exemple
        }
    }else{}

    if(!empty($_POST['superhero'])){
        $superhero = trim(filter_var($_POST['superhero'], FILTER_SANITIZE_STRING));

        $superhero = valid_data($superhero);


        //test de la donnée
        $test_regex = preg_match($regex_textarea, $superhero);
        if($test_regex !== 1){
            $error_array['error_superhero']->_active = true;
        }else{
            // On pourrait enregistrer dans la BDD par exemple
        }
    }else{}

    if(!empty($_POST['hack'])){
        $hack = valid_data($_POST['hack']);


        // test de la donnée
        $test_regex = preg_match($regex_textarea, $hack);
        if($test_regex !== 1){
            $error_array['error_hack']->_active = true;
        }else{
            // On pourrait enregistrer dans la BDD par exemple
        }
    }else{}

    if(!empty($_POST['xp_info'])){
        // $xp_info = trim(filter_var($_POST['xp_info'], FILTER_SANITIZE_STRING));

        $xp_info = valid_data($_POST['xp_info']);

        // test de la donnée
        $test_regex = preg_match($regex_textarea, $xp_info);
        if($test_regex !== 1){
            $error_array['error_xp_info']->_active = true;
        }else{
            // On pourrait enregistrer dans la BDD par exemple
        }
    }else{}

    // vérification de l'état des erreurs dans le tableau d'erreur
    // $error_array['error_name']->_active = true;
    foreach ($error_array as $key => $value) {
        if($error_array[$key]->_active == true){
            $error = true;
        }
    }
}
?>