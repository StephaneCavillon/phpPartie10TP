<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Lien bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- CSS Perso-->
    <link rel="stylesheet" href="assets/style/style.css">

    <title>Formulaire d'inscription</title>
</head>
<body>
    <h1 class="text-center mt-3">Formulaire d'inscription pour nouvel apprenant à La Manu</h1>

    <fieldset class="container my-4 shadow p-3 mb-5 bg-white rounded">
        <small>* champ obligatoire</small>
        <form action="" method="POST">
            <!-- nom et prénom -->
            <div class="my-3 row">
                <label for="lastname" class="col-form-label col-2">Votre Nom*</label>
                <div class="col-4">
                    <input type="text" name="lastname" id="lastname" class="form-control" pattern="^[A-Za-z éèêëàâäôöûüç '-]+$" minlength="2" maxlength="20" <?=(isset($lastname)) ? "value=\"$lastname\"" : ''?> required>
                    <?= ($error_array['error_name']->_active) ? $error_array['error_name']->_message : '';?>
                </div>
                <label for="name" class="col-form-label col-2">Votre Prénom*</label>
                <div class="col-4">
                    <input type="text" name="name" id="name" class="form-control"pattern="^[A-Za-z éèêëàâäôöûüç '-]+$" maxlength="20" <?=(isset($name)) ? "value=\"$name\"" : ''?> required>
                    <?= ($error_array['error_lastname']->_active) ? $error_array['error_lastname']->_message : '';?>
                </div>
            </div>
            <!-- date de naissance -->
            <div class="my-3 row">
                <label for="birthDate" class="col-form-label col-2">Votre Date de Naissance*</label>
                <div class="col-4">
                    <input type="date" name="birthDate" id="birthDate" class="form-control" min="<?=date('Y-m-d', strtotime('-100 year'));?>" max="<?=date('Y-m-d');?>" <?=(isset($birthDate)) ? "value=\"$birthDate\"" : ''?> required>
                    <?= ($error_array['error_birthDate']->_active) ? $error_array['error_birthDate']->_message : '';?>
                </div>
            </div>
            <!-- pays de naissance -->
            <div class="my-3 row">
                <label for="birthCountry" class="col-form-label col-2">Votre Pays de Naissance</label>
                <div class="col-4">
                    <select name="birthCountry" class="form-select">
                        <option value=<?=(isset($birthCountry)) ? "\"$birthCountry\"" : ''?>><?=(isset($birthCountry)) ? "\"$birthCountry\"" : ''?></option>
                        <option value="France">France </option>

                        <option value="Afghanistan">Afghanistan </option>
                        <option value="Afrique_Centrale">Afrique_Centrale </option>
                        <option value="Afrique_du_sud">Afrique_du_Sud </option>
                        <option value="Albanie">Albanie </option>
                        <option value="Algerie">Algerie </option>
                        <option value="Allemagne">Allemagne </option>
                        <option value="Andorre">Andorre </option>
                        <option value="Angola">Angola </option>
                        <option value="Anguilla">Anguilla </option>
                        <option value="Arabie_Saoudite">Arabie_Saoudite </option>
                        <option value="Argentine">Argentine </option>
                        <option value="Armenie">Armenie </option>
                        <option value="Australie">Australie </option>
                        <option value="Autriche">Autriche </option>
                        <option value="Azerbaidjan">Azerbaidjan </option>

                        <option value="Bahamas">Bahamas </option>
                        <option value="Bangladesh">Bangladesh </option>
                        <option value="Barbade">Barbade </option>
                        <option value="Bahrein">Bahrein </option>
                        <option value="Belgique">Belgique </option>
                        <option value="Belize">Belize </option>
                        <option value="Benin">Benin </option>
                        <option value="Bermudes">Bermudes </option>
                        <option value="Bielorussie">Bielorussie </option>
                        <option value="Bolivie">Bolivie </option>
                        <option value="Botswana">Botswana </option>
                        <option value="Bhoutan">Bhoutan </option>
                        <option value="Boznie_Herzegovine">Boznie_Herzegovine </option>
                        <option value="Bresil">Bresil </option>
                        <option value="Brunei">Brunei </option>
                        <option value="Bulgarie">Bulgarie </option>
                        <option value="Burkina_Faso">Burkina_Faso </option>
                        <option value="Burundi">Burundi </option>

                        <option value="Caiman">Caiman </option>
                        <option value="Cambodge">Cambodge </option>
                        <option value="Cameroun">Cameroun </option>
                        <option value="Canada">Canada </option>
                        <option value="Canaries">Canaries </option>
                        <option value="Cap_vert">Cap_Vert </option>
                        <option value="Chili">Chili </option>
                        <option value="Chine">Chine </option>
                        <option value="Chypre">Chypre </option>
                        <option value="Colombie">Colombie </option>
                        <option value="Comores">Colombie </option>
                        <option value="Congo">Congo </option>
                        <option value="Congo_democratique">Congo_democratique </option>
                        <option value="Cook">Cook </option>
                        <option value="Coree_du_Nord">Coree_du_Nord </option>
                        <option value="Coree_du_Sud">Coree_du_Sud </option>
                        <option value="Costa_Rica">Costa_Rica </option>
                        <option value="Cote_d_Ivoire">Côte_d_Ivoire </option>
                        <option value="Croatie">Croatie </option>
                        <option value="Cuba">Cuba </option>

                        <option value="Danemark">Danemark </option>
                        <option value="Djibouti">Djibouti </option>
                        <option value="Dominique">Dominique </option>

                        <option value="Egypte">Egypte </option>
                        <option value="Emirats_Arabes_Unis">Emirats_Arabes_Unis </option>
                        <option value="Equateur">Equateur </option>
                        <option value="Erythree">Erythree </option>
                        <option value="Espagne">Espagne </option>
                        <option value="Estonie">Estonie </option>
                        <option value="Etats_Unis">Etats_Unis </option>
                        <option value="Ethiopie">Ethiopie </option>

                        <option value="Falkland">Falkland </option>
                        <option value="Feroe">Feroe </option>
                        <option value="Fidji">Fidji </option>
                        <option value="Finlande">Finlande </option>
                        <option value="France">France </option>

                        <option value="Gabon">Gabon </option>
                        <option value="Gambie">Gambie </option>
                        <option value="Georgie">Georgie </option>
                        <option value="Ghana">Ghana </option>
                        <option value="Gibraltar">Gibraltar </option>
                        <option value="Grece">Grece </option>
                        <option value="Grenade">Grenade </option>
                        <option value="Groenland">Groenland </option>
                        <option value="Guadeloupe">Guadeloupe </option>
                        <option value="Guam">Guam </option>
                        <option value="Guatemala">Guatemala</option>
                        <option value="Guernesey">Guernesey </option>
                        <option value="Guinee">Guinee </option>
                        <option value="Guinee_Bissau">Guinee_Bissau </option>
                        <option value="Guinee equatoriale">Guinee_Equatoriale </option>
                        <option value="Guyana">Guyana </option>
                        <option value="Guyane_Francaise ">Guyane_Francaise </option>

                        <option value="Haiti">Haiti </option>
                        <option value="Hawaii">Hawaii </option>
                        <option value="Honduras">Honduras </option>
                        <option value="Hong_Kong">Hong_Kong </option>
                        <option value="Hongrie">Hongrie </option>

                        <option value="Inde">Inde </option>
                        <option value="Indonesie">Indonesie </option>
                        <option value="Iran">Iran </option>
                        <option value="Iraq">Iraq </option>
                        <option value="Irlande">Irlande </option>
                        <option value="Islande">Islande </option>
                        <option value="Israel">Israel </option>
                        <option value="Italie">italie </option>

                        <option value="Jamaique">Jamaique </option>
                        <option value="Jan Mayen">Jan Mayen </option>
                        <option value="Japon">Japon </option>
                        <option value="Jersey">Jersey </option>
                        <option value="Jordanie">Jordanie </option>

                        <option value="Kazakhstan">Kazakhstan </option>
                        <option value="Kenya">Kenya </option>
                        <option value="Kirghizstan">Kirghizistan </option>
                        <option value="Kiribati">Kiribati </option>
                        <option value="Koweit">Koweit </option>

                        <option value="Laos">Laos </option>
                        <option value="Lesotho">Lesotho </option>
                        <option value="Lettonie">Lettonie </option>
                        <option value="Liban">Liban </option>
                        <option value="Liberia">Liberia </option>
                        <option value="Liechtenstein">Liechtenstein </option>
                        <option value="Lituanie">Lituanie </option>
                        <option value="Luxembourg">Luxembourg </option>
                        <option value="Lybie">Lybie </option>

                        <option value="Macao">Macao </option>
                        <option value="Macedoine">Macedoine </option>
                        <option value="Madagascar">Madagascar </option>
                        <option value="Madère">Madère </option>
                        <option value="Malaisie">Malaisie </option>
                        <option value="Malawi">Malawi </option>
                        <option value="Maldives">Maldives </option>
                        <option value="Mali">Mali </option>
                        <option value="Malte">Malte </option>
                        <option value="Man">Man </option>
                        <option value="Mariannes du Nord">Mariannes du Nord </option>
                        <option value="Maroc">Maroc </option>
                        <option value="Marshall">Marshall </option>
                        <option value="Martinique">Martinique </option>
                        <option value="Maurice">Maurice </option>
                        <option value="Mauritanie">Mauritanie </option>
                        <option value="Mayotte">Mayotte </option>
                        <option value="Mexique">Mexique </option>
                        <option value="Micronesie">Micronesie </option>
                        <option value="Midway">Midway </option>
                        <option value="Moldavie">Moldavie </option>
                        <option value="Monaco">Monaco </option>
                        <option value="Mongolie">Mongolie </option>
                        <option value="Montserrat">Montserrat </option>
                        <option value="Mozambique">Mozambique </option>

                        <option value="Namibie">Namibie </option>
                        <option value="Nauru">Nauru </option>
                        <option value="Nepal">Nepal </option>
                        <option value="Nicaragua">Nicaragua </option>
                        <option value="Niger">Niger </option>
                        <option value="Nigeria">Nigeria </option>
                        <option value="Niue">Niue </option>
                        <option value="Norfolk">Norfolk </option>
                        <option value="Norvege">Norvege </option>
                        <option value="Nouvelle_Caledonie">Nouvelle_Caledonie </option>
                        <option value="Nouvelle_Zelande">Nouvelle_Zelande </option>

                        <option value="Oman">Oman </option>
                        <option value="Ouganda">Ouganda </option>
                        <option value="Ouzbekistan">Ouzbekistan </option>

                        <option value="Pakistan">Pakistan </option>
                        <option value="Palau">Palau </option>
                        <option value="Palestine">Palestine </option>
                        <option value="Panama">Panama </option>
                        <option value="Papouasie_Nouvelle_Guinee">Papouasie_Nouvelle_Guinee </option>
                        <option value="Paraguay">Paraguay </option>
                        <option value="Pays_Bas">Pays_Bas </option>
                        <option value="Perou">Perou </option>
                        <option value="Philippines">Philippines </option>
                        <option value="Pologne">Pologne </option>
                        <option value="Polynesie">Polynesie </option>
                        <option value="Porto_Rico">Porto_Rico </option>
                        <option value="Portugal">Portugal </option>

                        <option value="Qatar">Qatar </option>

                        <option value="Republique_Dominicaine">Republique_Dominicaine </option>
                        <option value="Republique_Tcheque">Republique_Tcheque </option>
                        <option value="Reunion">Reunion </option>
                        <option value="Roumanie">Roumanie </option>
                        <option value="Royaume_Uni">Royaume_Uni </option>
                        <option value="Russie">Russie </option>
                        <option value="Rwanda">Rwanda </option>

                        <option value="Sahara Occidental">Sahara Occidental </option>
                        <option value="Sainte_Lucie">Sainte_Lucie </option>
                        <option value="Saint_Marin">Saint_Marin </option>
                        <option value="Salomon">Salomon </option>
                        <option value="Salvador">Salvador </option>
                        <option value="Samoa_Occidentales">Samoa_Occidentales</option>
                        <option value="Samoa_Americaine">Samoa_Americaine </option>
                        <option value="Sao_Tome_et_Principe">Sao_Tome_et_Principe </option>
                        <option value="Senegal">Senegal </option>
                        <option value="Seychelles">Seychelles </option>
                        <option value="Sierra Leone">Sierra Leone </option>
                        <option value="Singapour">Singapour </option>
                        <option value="Slovaquie">Slovaquie </option>
                        <option value="Slovenie">Slovenie</option>
                        <option value="Somalie">Somalie </option>
                        <option value="Soudan">Soudan </option>
                        <option value="Sri_Lanka">Sri_Lanka </option>
                        <option value="Suede">Suede </option>
                        <option value="Suisse">Suisse </option>
                        <option value="Surinam">Surinam </option>
                        <option value="Swaziland">Swaziland </option>
                        <option value="Syrie">Syrie </option>

                        <option value="Tadjikistan">Tadjikistan </option>
                        <option value="Taiwan">Taiwan </option>
                        <option value="Tonga">Tonga </option>
                        <option value="Tanzanie">Tanzanie </option>
                        <option value="Tchad">Tchad </option>
                        <option value="Thailande">Thailande </option>
                        <option value="Tibet">Tibet </option>
                        <option value="Timor_Oriental">Timor_Oriental </option>
                        <option value="Togo">Togo </option>
                        <option value="Trinite_et_Tobago">Trinite_et_Tobago </option>
                        <option value="Tristan da cunha">Tristan de cuncha </option>
                        <option value="Tunisie">Tunisie </option>
                        <option value="Turkmenistan">Turmenistan </option>
                        <option value="Turquie">Turquie </option>

                        <option value="Ukraine">Ukraine </option>
                        <option value="Uruguay">Uruguay </option>

                        <option value="Vanuatu">Vanuatu </option>
                        <option value="Vatican">Vatican </option>
                        <option value="Venezuela">Venezuela </option>
                        <option value="Vierges_Americaines">Vierges_Americaines </option>
                        <option value="Vierges_Britanniques">Vierges_Britanniques </option>
                        <option value="Vietnam">Vietnam </option>

                        <option value="Wake">Wake </option>
                        <option value="Wallis et Futuma">Wallis et Futuma </option>

                        <option value="Yemen">Yemen </option>
                        <option value="Yougoslavie">Yougoslavie </option>

                        <option value="Zambie">Zambie </option>
                        <option value="Zimbabwe">Zimbabwe </option>

                    </select>
                    <?= ($error_array['error_birthCountry']->_active) ? $error_array['error_birthCountry']->_message : '';?>

                </div>
            </div>
            <!-- Nationalité -->
            <div class="my-3 row">
                <label for="nation" class="col-form-label col-2">Votre Nationalité*</label>
                <div class="col-4">
                    <input type="text" name="nation" id="nation" class="form-control" pattern="^[A-Za-z éèêëàâäôöûüç '-]+$" <?=(isset($nation)) ? "value=\"$nation\"" : ''?> required>
                    <?= ($error_array['error_nation']->_active) ? $error_array['error_nation']->_message : '';?>
                </div>
            </div>
            <!-- Adresse -->
            <div class="my-3 row">
                <p class="col-2">Votre Adresse*</p>
                <div class="mb-3 row">
                    <label for="adresse_number" class="col-form-label col-1 offset-1">N°</label>
                    <div class="col-2">
                        <input type="text" name="adresse_number" id="adresse_number" class="form-control" pattern="^(\d{1,4})$" <?=(isset($adresse_number)) ? "value=\"$adresse_number\"" : ''?> required>
                        <?= ($error_array['error_adresse_number']->_active) ? $error_array['error_adresse_number']->_message : '';?>
                    </div>
                    <label for="road_name" class="col-form-label col-2">Nom de la voie</label>
                    <div class="col-5">
                        <input type="text" name="road_name" id="road_name" class="form-control" pattern="^[A-Za-z éèêëàâäôöûüç '-]+$" <?=(isset($road_name)) ? "value=\"$road_name\"" : ''?> required>
                        <?= ($error_array['error_road_name']->_active) ? $error_array['error_road_name']->_message : '';?>
                    </div>
                </div>
            
                <div class="row">
                    <label for="postal_code" class="col-form-label col-1 offset-1">Code Postal</label>
                    <div class="col-2">
                        <input type="text" name="postal_code" id="postal_code" class="form-control" pattern="^(\d{2,3}|\d{5})$" <?=(isset($postal_code)) ? "value=\"$postal_code\"" : ''?> required>
                        <?= ($error_array['error_postal_code']->_active) ? $error_array['error_postal_code']->_message : '';?>

                    </div>
                    <label for="city" class="col-form-label col-2">Ville</label>
                    <div class="col-3">
                        <input type="text" name="city" id="city" class="form-control" pattern="^[A-Za-z éèêëàâäôöûüç '-]+$" <?=(isset($city)) ? "value=\"$city\"" : ''?> required>
                        <?= ($error_array['error_city']->_active) ? $error_array['error_city']->_message : '';?>
                    </div>
                </div>
            </div>
            <!-- Mail -->
            <div class="my-3 row">
                <label for="mail" class="col-form-label col-2">Votre E-Mail*</label>
                <div class="col-4">
                    <input type="email" name="mail" id="mail" class="form-control" placeholder="exemple@domaine.fr" pattern="^[\w\.-]+@[\w-]+\.\w{2,10}$" <?=(isset($mail)) ? "value=\"$mail\"" : ''?> required>
                    <?= ($error_array['error_mail']->_active) ? $error_array['error_mail']->_message : '';?>
                </div>
            </div>
            <!-- Telephone -->
            <div class="my-3 row">
                <label for="phone" class="col-form-label col-2">Votre Numéro de Téléphone*</label>
                <div class="col-4">
                    <input type="tel" name="phone" id="phone" class="form-control" pattern="([0-9]{2}[-|\/|\.|\s]){4}[0-9]{2}" placeholder="01-02-03-04-05" <?=(isset($phone)) ? "value=\"$phone\"" : ''?> required>
                    <?= ($error_array['error_phone']->_active) ? $error_array['error_phone']->_message : '';?>
                </div>
            </div>
            <!-- Diplôme -->
            <div class="my-3 row">
                <label for="diplome" class="col-form-label col-2">Votre Dernier Diplôme</label>
                <div class="col-4">
                    <select name="diplome" class="form-select">
                        <option value="<?=(isset($diplome)) ? "\"$diplome\"" : ''?>"><?=(isset($diplome)) ? "\"$diplome\"" : ''?></option>
                        <option value="-1" selected>Sans diplôme</option>
                        <option value="+1">Bac</option>
                        <option value="+2">Bac+2</option>
                        <option value="+3">bac+3 ou Supérieur</option> 
                    </select>
                    <?= ($error_array['error_diplome']->_active) ? $error_array['error_diplome']->_message : '';?>
                </div>
            </div>
            <!-- Numéro Pole Emploi  format 3618539V25-->
            <div class="my-3 row">
                <label for="job_number" class="col-form-label col-2">Votre Numéro Pole Emploi*</label>
                <div class="col-4">
                    <input type="text" name="job_number" id="job_number" class="form-control" pattern="^(\d{7}[A-Z]\d{2})$" <?=(isset($job_number)) ? "value=\"$job_number\"" : ''?> required>
                    <?= ($error_array['error_job_number']->_active) ? $error_array['error_job_number']->_message : '';?>
                </div>
            </div>
            <!-- nombre de badge -->
            <div class="my-3 row">
                <label for="badge_number" class="col-form-label col-2">Votre Nombre de Badge CodeCademy</label>
                <div class="col-4">
                    <input type="number" name="badge_number" id="badge_number" class="form-control" min="0" max="200" <?=(isset($badge_number)) ? "value=\"$badge_number\"" : ''?>>
                    <small id="valide_badge_number"></small>
                    <?= ($error_array['error_badge_number']->_active) ? $error_array['error_badge_number']->_message : '';?>
                </div>
            </div>
            <!-- lien Codecademy format= https://www.codecademy.com/profiles/ang3lorius2105456732-->
            <div class="my-3 row">
                <label for="codecademy_link" class="col-form-label col-2">Votre Profil Codecademy</label>
                <div class="col-4">
                    <input type="text" name="codecademy_link" id="codecademy_link" class="form-control" pattern="^(https:\/\/www\.codecademy\.com\/profiles\/[\w]+)$" <?=(isset($codecademy_link)) ? "value=\"$codecademy_link\"" : ''?>>
                    <?= ($error_array['error_codecademy_link']->_active) ? $error_array['error_codecademy_link']->_message : '';?>
                </div>
            </div>
            <!-- superhéros -->
            <div class="my-3 row">
                <label for="superhero" class="col-form-label col-2">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ?</label>
                <div class="col-6">
                    <textarea name="superhero" id="superhero" class="form-control" style="height: 200px" placeholder="Super héros/une super héroïne, qui seriez-vous et pourquoi ?" <?=(isset($superhero)) ? "value=\"$superhero\"" : ''?>></textarea>
                    <?= ($error_array['error_superhero']->_active) ? $error_array['error_superhero']->_message : '';?>
                </div>
            </div>
            <!-- hack -->
            <div class="my-3 row">
                <label for="hack" class="col-form-label col-2">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)</label>
                <div class="col-6">
                    <textarea name="hack" id="hack" class="form-control" style="height: 200px" placeholder="Racontez-nous un de vos hacks" <?=(isset($hack)) ? "value=\"$hack\"" : ''?>></textarea>
                    <?= ($error_array['error_hack']->_active) ? $error_array['error_hack']->_message : '';?>
                </div>
            </div>
            <!-- xp programmation -->
            <div class="my-3 row">
                <label for="xp_info" class="col-form-label col-2">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</label>
                <div class="col-6">
                    <textarea name="xp_info" id="xp_info" class="form-control" style="height: 200px" placeholder="Racontez-nous vos expériences" <?=(isset($xp_info)) ? "value=\"$xp_info\"" : ''?>></textarea>
                    <?= ($error_array['error_xp_info']->_active) ? $error_array['error_xp_info']->_message : '';?>
                </div>
            </div>
            <!-- Bouton -->
            <div class="row">
                <button type="submit" name="submit" id="submit" class="offset-4 col-4 btn btn-info btn-lg" disabled> Soumettre le formulaire</button>
            </div>
        </form>    
    </fieldset>
    


<!-- Script bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

<!-- script perso -->
<script src="assets/js/script.js"></script>
</body>
</html>