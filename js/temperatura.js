const converter = document.getElementById('convert');
const clear = document.getElementById('clear');
const formTemperaturaC = document.getElementById('formTemperaturaC');
const formTemperaturaF = document.getElementById('formTemperaturaF');
const formTemperaturaK = document.getElementById('formTemperaturaK');

function tempConvert(){
    var fahrenheit = document.getElementById("fahrenheit").value;
    var celsius = document.getElementById("celsius").value;
    var kelvin = document.getElementById("kelvin").value;

    if(isNaN(fahrenheit) || isNaN(celsius) || isNaN(kelvin)){
        alert("Digite um valor válido!");
        return
    }else if(celsius !== ''){
        fahrenheit = (parseFloat(celsius) * 1.8) + 32;
        kelvin = parseFloat(celsius) + 273.15;
    } else if(fahrenheit !== ''){
        celsius = (parseFloat(fahrenheit) - 32) / 1.8;
        kelvin = ((parseFloat(fahrenheit) - 32) / 1.8) + 273.15;
    } else if(kelvin !== ''){
        celsius = parseFloat(kelvin) - 273.15;
        fahrenheit = ((parseFloat(kelvin) - 273.15) * 1.8) + 32;
    }

    document.getElementById("celsius").value = parseFloat(celsius).toFixed(1) + " C°";
    document.getElementById("fahrenheit").value = parseFloat(fahrenheit).toFixed(1) + " °F";
    document.getElementById("kelvin").value = parseFloat(kelvin).toFixed(2) + " K";
}

function clearForm(){
    document.getElementById("fahrenheit").value = "";
    document.getElementById("celsius").value = "";
    document.getElementById("kelvin").value = "";
}

const submit = e => {
    e.preventDefault();
    tempConvert();
}

clear.onclick = clearForm;
converter.onclick = submit;
formTemperaturaC.onsubmit = submit;
formTemperaturaF.onsubmit = submit;
formTemperaturaK.onsubmit = submit;