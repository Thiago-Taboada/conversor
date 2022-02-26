const converter = document.getElementById('convert');
const clear = document.getElementById('clear');
const formMassaTon = document.getElementById('formMassaTon');
const formMassaKg = document.getElementById('formMassaKg');
const formMassaG = document.getElementById('formMassaG');
const formMassaMg = document.getElementById('formMassaMg');
const formMassaLibra = document.getElementById('formMassaLibra');

function massaConvert(){
    var tonelada = document.getElementById("tonelada").value;
    var kilo = document.getElementById("kilo").value;
    var grama = document.getElementById("grama").value;
    var miligrama = document.getElementById("miligrama").value;
    var libra = document.getElementById("libra").value;

    if(isNaN(tonelada) || isNaN(kilo) || isNaN(grama) || isNaN(miligrama) || isNaN(libra)){
        alert("Digite um valor válido!");
        return
    }else if(tonelada !== ''){
        kilo = parseFloat(tonelada) * 1000;
        grama = parseFloat(tonelada) * 1000000;
        miligrama = parseFloat(tonelada) * 1000000000;
        libra = parseFloat(tonelada) * 2204.62;
    }else if(kilo !== ''){
        tonelada = parseFloat(kilo) / 1000;
        grama = parseFloat(kilo) * 1000;
        miligrama = parseFloat(kilo) * 1000000;
        libra = parseFloat(kilo) * 2.20462;
    }else if(grama !== ''){
        tonelada = parseFloat(grama) / 1000000;
        kilo = parseFloat(grama) / 1000;
        miligrama = parseFloat(grama) * 1000;
        libra = parseFloat(grama) * 0.00220462;
    }else if(miligrama !== ''){
        tonelada = parseFloat(miligrama) / 1000000000;
        kilo = parseFloat(miligrama) / 1000000;
        grama = parseFloat(miligrama) / 1000;
        libra = parseFloat(miligrama) * 0.00000220462;
    }else if(libra !== ''){
        tonelada = parseFloat(libra) / 2204.62;
        kilo = parseFloat(libra) / 2.20462;
        grama = parseFloat(libra) / 0.00220462;
        miligrama = parseFloat(libra) / 0.00000220462;
    }

    document.getElementById("tonelada").value = parseFloat(tonelada).toFixed(9) + " Ton";
    document.getElementById("kilo").value = parseFloat(kilo).toFixed(5) + " Kg";
    document.getElementById("grama").value = parseFloat(grama).toFixed(5) + " G";
    document.getElementById("miligrama").value = parseFloat(miligrama).toFixed(5) + " Mg";
    document.getElementById("libra").value = parseFloat(libra).toFixed(5) + " lb";
}

function clearForm(){
    document.getElementById("tonelada").value = "";
    document.getElementById("kilo").value = "";
    document.getElementById("grama").value = "";
    document.getElementById("miligrama").value = "";
    document.getElementById("libra").value = "";
}

const submit = e => {
    e.preventDefault();
    massaConvert();
}

clear.onclick = clearForm;
converter.onclick = submit;
formMassaTon.onsubmit = submit;
formMassaKg.onsubmit = submit;
formMassaG.onsubmit = submit;
formMassaMg.onsubmit = submit;
formMassaLibra.onsubmit = submit;