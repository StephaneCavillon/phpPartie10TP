<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultats du formulaire</title>
</head>
<body>
    <h1>Dossier de candidature pour un nouvel apprenant La Manu</h1>
    
    <p> Bonjour <?=$name . ' ' . $lastname?>, Vous êtes né(e) le <?=$birthDate?><!--et avez XX ans-->. <br>
    <?=(isset($birthCountry)) ? 'Votre pays de naissance est ' . $birthCountry . ' et vous' : 'Vous '?> êtes <?=$nation?>.<br>
    Vous habitez au <?=$adresse_number . ', ' . $road_name . ' à ' . $city?> dont le code postal est <?=$postal_code?>. <br>
    Votre adresse Email est <?=$mail?> et votre numéro de téléphone est le <?=$phone?>. <br>
    <?= ($diplome == 'Sans diplome') ? 'Vous n\'avez pas de diplome' : "Votre dernier diplome est $diplome."?> <br>
    Votre identifiant Pole Emploi est <?=$job_number?>. <br>

    <?= (isset($codecademy_link)) ? ('Vous avez un profil codecademy' . ((isset($badge_number)) ? "avec $badge_number." : ".")) : ''?>

    <?= (isset($superhero)) ? "Le superhéros auxquel vous vous identifiez est $superhero." : ''?><br>
    <?= (isset($hack)) ? "L'un de vos hacks est $hack" : '' ?><br>
    <?= (isset($xp_info)) ? "Votre experience dans la $xp_info" : '' ?>
    </p>

    <h2>Merci d'avoir rempli le formulaire !</h2>
</body>
</html>