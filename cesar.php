<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="icon" href="img/rule icon.png">
    <script src="js/cesar.js" type="text/javascript" defer></script>
    <script src="https://kit.fontawesome.com/b658364985.js" crossorigin="anonymous"></script>
    <title>Conversor Universal</title>
</head>
<body>
    <div class="globalCesar">


<?php include('template/header.php'); ?>


        <table>
            <tr>
                <td><h1>Cifra de Cesar.</h1></td>
            </tr>
            <tr>
                <td>
                    <form id="codificador" autocomplete="off">
                        <input id="input-original" spellcheck="false" placeholder="Insira o texto aqui." type="text" >
                    </form>
                </td>
            </tr>
            <tr>
                <td>
                    <div id="resultado"></div>
                </td>
            </tr>
            <tr>
                <td>
                    <div id="rangeBox">
                        <input id="range" type="range" value="7" min="0" max="26" oninput="this.nextElementSibling.value = this.value">
                        <output>7</output>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <button id="convert">CONVERTER</button>
                    <input id="decodificar" type="checkbox">
                </td>
            </tr>
        </table>
    </div>
    <div class="artigoCesar">
          <article>
              <h2>Cifra de Cesar</h2>
              <br>
              <p>Em criptografia, a Cifra de César, também conhecida como cifra de troca, código de César ou troca de César, é uma das mais simples e conhecidas técnicas de criptografia. É um tipo de cifra de substituição na qual cada letra do texto é substituída por outra, que se apresenta no alfabeto abaixo dela um número fixo de vezes. Por exemplo, com uma troca de três posições, 'A' seria substituído por 'D', 'B' se tornaria 'E', e assim por diante. A cifra de César foi nomeada em homenagem a Júlio César que, segundo Suetónio, a usava com uma troca de três posições para proteger mensagens de significado militar.</p>
              <br>
              <p><img class="img1cesar" src="img/320px-Caesar.png" title="Representação da Cifra de Cesar" alt="Representação da Cifra de Cesar"> A ação de uma cifra de César é mover cada letra do alfabeto um número de vezes fixo abaixo no alfabeto. Este exemplo está com uma troca de três, então o B no texto normal se torna E no texto cifrado</p>
          </article>
    </div>

<?php include('template/footer.php'); ?>