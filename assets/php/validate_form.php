<?php
$error = false;
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
        $name = valid_data($_POST['name']);
        
        $test_regex = preg_match($regex_name, $name);
        if($test_regex !== 1){
            $error = true;
            $error_array['error_name']->_active = true;
        }
    }else{
        $error = 'Veuillez remplir le champ \'nom\'. ';
    }

    if(!empty($_POST['lastname'])){
        $lastname = valid_data($_POST['lastname']);

    }

    // test des champs obligatoire et mise en variable 
    if(!empty($_POST['name']) && !empty($_POST['lastname']) && !empty($_POST['birthDate']) && !empty($_POST['nation']) && !empty($_POST['adresse_number']) && !empty($_POST['road_name']) && !empty($_POST['postal_code']) && !empty($_POST['city']) && !empty($_POST['mail']) && !empty($_POST['phone']) && !empty($_POST['job_number'])){
      
        $name = valid_data($_POST['name']);
        $lastname = valid_data($_POST['lastname']);
        $birthDate = valid_data($_POST['birthDate']);
        $nation = valid_data($_POST['nation']);
        $adresse_number = valid_data($_POST['adresse_number']);
        $road_name = valid_data($_POST['road_name']);
        $postal_code = valid_data($_POST['postal_code']);
        $city = valid_data($_POST['city']);
        $mail = filter_var(valid_data($_POST['mail']), FILTER_SANITIZE_EMAIL);
        $phone = valid_data($_POST['phone']);
        $job_number = valid_data($_POST['job_number']);

    } else {
   // if(isset($_POST[]))
}
}
?>