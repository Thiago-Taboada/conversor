const alfabeto = ["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"];
const inputOriginal = document.getElementById('input-original');
const codificador = document.getElementById('codificador');
const converter = document.getElementById('convert');
const decodificar = document.getElementById("decodificar")
const resultado = document.getElementById('resultado');
const range = document.getElementById('range');

const shifMessage = () => {
    const wordArray = [...inputOriginal.value.toUpperCase()];
    printChar(0, wordArray);
}

const printChar = (currentLetterIndex, wordArray) => {
    if(wordArray.length === currentLetterIndex) return;
    const spanChar = document.createElement("span");
    resultado.appendChild(spanChar);
    animateChar(spanChar)
        .then( () => {
            const charSemCodificar = wordArray[currentLetterIndex];

            if (decodificar.checked == true) {
                spanChar.innerHTML = alfabeto.includes(charSemCodificar) ?
                    alfabeto[(alfabeto.indexOf(charSemCodificar) + (26-parseInt(range.value))) % alfabeto.length] : 
                    charSemCodificar
                printChar(currentLetterIndex + 1, wordArray);
            } else {
                spanChar.innerHTML = alfabeto.includes(charSemCodificar) ?
                    alfabeto[(alfabeto.indexOf(charSemCodificar) + parseInt(range.value)) % alfabeto.length] : 
                    charSemCodificar
                printChar(currentLetterIndex + 1, wordArray);    
            } 
        });
}

const animateChar = spanChar => {
    let charChanges = 0;
    return new Promise(resolve => {
        const intervalo = setInterval(() => {
            spanChar.innerHTML = alfabeto[Math.floor(Math.random() * alfabeto.length)];
            charChanges++;
            if(charChanges === 3) {
                clearInterval(intervalo);
                resolve();
            }
        }, 50);
    });
}

const submit = e => {
    e.preventDefault();
    resultado.innerHTML = '';
    shifMessage()
}

codificador.onsubmit = submit;
converter.onclick = submit;