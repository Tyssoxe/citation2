
let i = 0;
let j= 1;
let div = document.getElementById('contenu')

function getValue(){
    let input = document.getElementById('in').value;
    let tableau = [input]
    console.log(tableau);
    while (i <j) {
        let createcard = document.createElement('div');
        let createcardbody = document.createElement('div');
        let createh4 = document.createElement('h4');
        let createp = document.createElement('p');
        let button = document.createElement('button');
        createh4.textContent = "citation"+i;
        createp.textContent = tableau[0];
        button.textContent = 'voir les details';
        createcard.setAttribute('class', 'card');
        createcard.setAttribute('style' , 'width: 20rem;');
        createcardbody.setAttribute('class','card-body');
        createcardbody.appendChild(createh4);
        createcardbody.appendChild(createp);
        createcardbody.appendChild(button);
        createcard.appendChild(createcardbody);
        contenu.appendChild(createcard);
        i++;
        }
        j++
}

