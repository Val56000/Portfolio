//fichier js désactivant le bouton submit des commentaires tant que le textarea ne contient aucun caractères

let textarea = document.querySelector('textarea');
let submit1 = document.querySelector('#input');

submit1.disabled = true;
textarea.addEventListener('keyup', () =>{


    if(textarea.value != ""){
submit1.disabled = false;
submit1.style.backgroundColor = "white";
    }
    else{
        submit1.disabled = true;
        submit1.style.backgroundColor = "none";
    }
});
