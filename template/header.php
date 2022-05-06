
        <header>
            <div class="menu">
                <nav>
                    <ul>
                        <li><a href="index.php" class="homeico"><i class="fa-solid fa-house"></i></a></li>
                        <li><a href="distancia.php">Distancia</a></li>
                        <li><a href="tempo.php">Tempo</a></li>
                        <li><a href="temperatura.php">Temperatura</a></li>
                        <li><a href="massa.php">Massa</a></li>
                        <li><a href="dados.php">Dados</a></li>
                        <li><a href="velocidade.php">Velocidade</a></li>
                        <li><a href="#">Texto</a>
                            <ul>
                                <li><a href="#">Binario</a>
                                <li><a href="cesar.php">Cesar</a>
                            </ul>
                        </li>
                    </ul>
                </nav>    
            </div>
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
            <div class="acessos">
                <i class="fa-solid fa-eye"></i> Acessos: <?php echo $lerArquivo; ?>
            </div>
        </header>