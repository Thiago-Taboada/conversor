const converter = document.getElementById('convert');
const clear = document.getElementById('clear');
const formTemperatura = document.getElementById('formTemperatura');

// >>>> formula kelvin: <<<<
// kelvin = parseFloat(celsius) + 273.15;
// ou
// kelvin = ((parseFloat(fahrenheit) - 32) / 1.8) + 273.15;

function tempConvert(){
    var fahrenheit = document.getElementById("fahrenheit").value;
    var celsius = document.getElementById("celsius").value;
    //var kelvin = document.getElementById("kelvin").value;

    if(isNaN(fahrenheit) || isNaN(celsius)){
        alert("Digite um valor válido!");
        return
    }else if(fahrenheit === ''){
        fahrenheit = (parseFloat(celsius) * 1.8) + 32;
    } else if(celsius === ''){
        celsius = (parseFloat(fahrenheit) - 32) / 1.8;
    }

    document.getElementById("fahrenheit").value = parseFloat(fahrenheit).toFixed(1);
    document.getElementById("celsius").value = parseFloat(celsius).toFixed(1);
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
formTemperatura.onsubmit = submit;