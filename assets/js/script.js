// message si nombre de badge supérieur à 200
let input_badge_number = document.querySelector('#badge_number');

input_badge_number.addEventListener('input', function() {
    let validMessage = document.getElementById('valide_badge_number');

    if(input_badge_number.value > 200 || input_badge_number.value < 0){
        validMessage.innerHTML = 'Mytho !';
        validMessage.style.color = 'red';
    }else if(input_badge_number.value > 100 && input_badge_number.value <= 200){
        validMessage.innerHTML = 'Bravo !';
        validMessage.style.color = 'green';
    }else{
        validMessage.innerHTML = 'Encore un petit effort ;)';
        validMessage.style.color = 'black';
    }
})

// activation du bouton submit si les champs requis sont bien remplis
let input_required = document.querySelectorAll('input[required]');
let submit_btn = document.querySelector('button');

console.log(input_required);
input_required.forEach(element => {
    // ajout d'un listener sur les champs required
    element.addEventListener('change', function() {
        // création d'une variable
        let form_check = false;

        // On vérifie la validité ou non de tout les éléments requis
        input_required.forEach(input =>{            
            if(input.checkValidity()){
                form_check=true;
            }else{
                form_check=false;
            };
        })

        // On reverifie l'element testé au cas ou ce ne soit pas le dernier
        if(element.checkValidity()){
            form_check=true;
        }else{
            form_check=false;
        };

        // si les champs requis du formulaire sont OK "active" le button
        if(form_check){
            submit_btn.removeAttribute('disabled');
        }else{
            submit_btn.setAttribute('disabled','');
        }
    })
})