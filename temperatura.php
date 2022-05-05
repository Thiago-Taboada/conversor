<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="icon" href="img/rule icon.png">
    <script src="js/temperatura.js" type="text/javascript" defer></script>
    <script src="https://kit.fontawesome.com/b658364985.js" crossorigin="anonymous"></script>
    <title>Conversor Universal</title>
</head>
<body>
    <div class="globalTemperatura">


<?php include('template/header.php'); ?>

        <table>
            <tr>
                <td><h1>Temperatura.</h1></td>
            </tr>
            <tr>
                <td>
                    <form id="formTemperaturaC" autocomplete="off">
                        <input type="text" id="celsius" placeholder="C°" value="">
                    </form>
                </td>
            </tr>
            <tr>
                <td>
                    <form id="formTemperaturaF" autocomplete="off">
                        <input type="text" id="fahrenheit" placeholder="°F" value="">
                    </form>
                </td>
            </tr>
            <tr>
                <td>
                    <form id="formTemperaturaK" autocomplete="off">
                        <input type="text" id="kelvin" placeholder="K" value="">
                    </form>
                </td>
            </tr>
            <tr>
                <td>
                    <button id="convert">CONVERTER</button>
                    <button id="clear">Limpar</button>
                </td>
            </tr>
          </table>
    </div>
    <div class="artigoTemperatura">
        <article>
            <h2>O que é temperatura?</h2>
            <br>
            <p>Trata-se de uma grandeza escalar que determina o grau de agitação das moléculas de um corpo, indicando se ele está quente ou frio.</p>
            <br>
            <p>Atualmente existem três escalas termométricas utilizadas em todo o mundo:</p>
            <br>
            <p><img class="img1Temper" src="img/temperaturasKFC.jpg" title="Escalas Fahrenheit, Celsius e Kelvin" alt="Escalas Fahrenheit, Celsius e Kelvin">A escala <b>Celsius</b> (unidade °C), também conhecida como a escala centígrada, é uma escala termométrica do sistema métrico usada na maioria dos países do mundo. Teve origem a partir do modelo proposto pelo astrônomo sueco Anders Celsius (1701-1744).</p>
            <br>
            <p>Esta escala é baseada nos pontos de fusão e de ebulição da água, em condição atmosférica padrão, aos quais são atribuídos os valores de 0 °C e 100 °C, respectivamente. Devido a esta divisão centesimal, se deu a antiga nomenclatura grau centígrado (cem partes/graus) que, em 1948, durante a 9.ª Conferência Geral de Pesos e Medidas (CR 64), teve seu nome oficialmente modificado para grau Celsius, em reconhecimento ao trabalho de Anders Celsius e para fim de desambiguação com o prefixo centi do Sistema Internacional de Unidades.</p>
            <br>
            <p><b>Fahrenheit</b> é uma escala de temperatura proposta por Daniel Gabriel Fahrenheit em 1724. Sua unidade é o grau Fahrenheit (símbolo: °F). Nesta escala, o ponto de fusão da água é de 32 °F e o ponto de ebulição é de 212 °F. Uma diferença de 1,8 °F é igual a uma diferença de 1 °C.</P>
            <br>
            <p>Esta escala foi utilizada principalmente pelos países que foram colonizados pelos britânicos, mas seu uso atualmente se restringe a poucos países de língua inglesa, como os Estados Unidos e Belize. E também, muito utilizada com o povo grego, para medir a temperatura de um corpo.</p>
            <br>
            <p>O <b>kelvin</b> (símbolo: K) é a unidade de base do Sistema Internacional de Unidades (SI) para a grandeza temperatura termodinâmica. O kelvin é a fração 1/273,16 da temperatura termodinâmica do ponto triplo da água, ou seja, é definido de tal modo que o ponto triplo da água é exatamente 273,16 K. É uma das sete unidades de base do SI, muito utilizada na física e química. É utilizado para medir a temperatura absoluta de um objeto, com zero absoluto sendo 0 K.</p>
            <br>
            <p>A escala kelvin recebeu este nome em homenagem ao físico e engenheiro irlandês William Thomson (1824–1907), 1º barão Kelvin, que escreveu sobre a necessidade de uma "escala termométrica absoluta".</p>
            <br>
            <p>Diferentemente do grau Fahrenheit e do grau Celsius, o kelvin não é referido nem escrito como um grau. O kelvin é a unidade primária de medida de temperatura nas ciências físicas, mas é frequentemente usado em conjunção com o grau Celsius, que tem a mesma magnitude.</p>
        </article>
  </div>
<?php include('template/footer.php'); ?>