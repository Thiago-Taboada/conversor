<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="icon" href="img/rule icon.png">
    <script src="https://kit.fontawesome.com/b658364985.js" crossorigin="anonymous"></script>
    <title>Conversor Universal</title>
</head>

<?php
if (file_exists('contador.php'))
$obterArquivo = fopen('contador.php','r+');

else $obterArquivo = fopen('contador.php','w+');
$lerArquivo = fgets($obterArquivo,20);
if ($lerArquivo == '')
$lerArquivo = "0";
rewind($obterArquivo);
fputs($obterArquivo,++$lerArquivo);
fclose($obterArquivo);
?>
<body>
    <div class="globalIndex">


<?php include('template/header.php'); ?>

    <table>
            <tr>
                <td><h1>Escolha o tipo de unidade que quer converter.</h1></td>
            </tr>
          </table>
    </div>
    
<?php include('template/footer.php'); ?>