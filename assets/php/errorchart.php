<?php
    $error = false;
    $error_array = array();

    class create_error{
        public $_message = '';
        public $_active = false;

        public function setMessage($message){
            $this->_message = $message;
        }

    }
    
    function add_in_array($array,$key,$value){
        $array[$key] = $value;
        return $array;
    }

    $error_name = new create_error;
    $error_name->setMessage('Le nom n\'est pas valide');

    $error_lastname = new create_error;
    $error_lastname->setMessage('Le prénom n\'est pas valide');

    $error_birthDate = new create_error;
    $error_birthDate ->setMessage('Le Date de naissance n\'est pas valide');

    $error_birthCountry = new create_error;
    $error_birthCountry ->setMessage('Le pays de naissance n\'est pas valide');

    $error_nation = new create_error;
    $error_nation ->setMessage('La Nationalité n\'est pas valide');

    $error_adresse_number = new create_error;
    $error_adresse_number ->setMessage('Le Numéro d\'adresse n\'est pas valide');

    $error_road_name = new create_error;
    $error_road_name ->setMessage('Le nom de la voie n\'est pas valide');

    $error_postal_code = new create_error;
    $error_postal_code ->setMessage('Le code postal n\'est pas valide');

    $error_city = new create_error;
    $error_city ->setMessage('La ville n\'est pas valide');

    $error_mail = new create_error;
    $error_mail ->setMessage('L\'Adresse mail n\'est pas valide');

    $error_phone = new create_error;
    $error_phone ->setMessage('Le Numero de téléphone n\'est pas valide');

    $error_diplome = new create_error;
    $error_diplome ->setMessage('Le Diplôme n\'est pas valide');

    $error_job_number = new create_error;
    $error_job_number ->setMessage('Le Numéro pole Emploi n\'est pas valide, le format accepté est : xxxxxxxAxx');

    $error_badge_number = new create_error;
    $error_badge_number ->setMessage('Le nombre de badge n\'est pas valide');

    $error_codecademy_link = new create_error;
    $error_codecademy_link ->setMessage('Le lien n\'est pas valide, le format accepté est : https://www.codecademy.com/profiles/xxx');

    $error_superhero = new create_error;
    $error_superhero ->setMessage('Le message n\'est pas valide');

    $error_hack = new create_error;
    $error_hack ->setMessage('Le message n\'est pas valide');

    $error_xp_info = new create_error;
    $error_xp_info ->setMessage('Le message n\'est pas valide');


    $error_array = add_in_array($error_array,'error_name',$error_name);
    $error_array = add_in_array($error_array,'error_lastname',$error_lastname);
    $error_array = add_in_array($error_array,'error_birthDate', $error_birthDate);
    $error_array = add_in_array($error_array,'error_birthCountry', $error_birthCountry);
    $error_array = add_in_array($error_array,'error_nation', $error_nation);
    $error_array = add_in_array($error_array,'error_adresse_number', $error_adresse_number);
    $error_array = add_in_array($error_array,'error_road_name', $error_road_name);
    $error_array = add_in_array($error_array,'error_postal_code', $error_postal_code);
    $error_array = add_in_array($error_array,'error_city', $error_city);
    $error_array = add_in_array($error_array,'error_mail', $error_mail);
    $error_array = add_in_array($error_array,'error_phone', $error_phone);
    $error_array = add_in_array($error_array,'error_diplome', $error_diplome);
    $error_array = add_in_array($error_array,'error_job_number', $error_job_number);
    $error_array = add_in_array($error_array,'error_badge_number', $error_badge_number);
    $error_array = add_in_array($error_array,'error_codecademy_link', $error_codecademy_link);
    $error_array = add_in_array($error_array,'error_superhero', $error_superhero);
    $error_array = add_in_array($error_array,'error_hack', $error_hack);
    $error_array = add_in_array($error_array,'error_xp_info', $error_xp_info);

    // var_dump($error_array);
    
// exemple pour acceder au propritété des objets du tableau
    // echo $error_array['error_lastname']->_message;
    // var_dump($error_array['error_lastname']->_active);
    // $error_array['error_lastname']->_active = true;
    // var_dump($error_array['error_lastname']->_active);
?>