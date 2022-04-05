<?php
include '../functions/functions.php';

$produto = $_POST['produto'];
$valor = $_POST['valor'];
$tempo = time();

if(empty($produto) || empty($valor)) {
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="../static/css/alert-compra.css">
    <link rel="shortcut icon" href="static/images/favicon.ico" type="image/x-icon">

    <title>FRIGORIFICO</title>
</head>
<body>

    <header class="header">

        <a href="../index.html">
            <p id="main__header">FRIGORIFICO</p>
        </a>

    </header>

    <main class="main">

        <div class="aviso">
            <p id="alert">VOCÊ NÃO INSERIU NADA EM SUA COMPRA!</p>
            <p class="opc">FAZER COMPRA: <a id="link" href="../comprar.php">Clique aqui</a></p>
        </div>

    </main>

    <footer>
        <p>Copyright &copy; GitHub: andersonzero0</p>
    </footer>

</body>
</html>


<?php
}else{
    $date = date("d/m/Y", $tempo);
    $registro = "$produto|$valor|$date|";
    escreverData('vendas.txt', $registro);
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="../static/css/alert-compra.css">
    <link rel="shortcut icon" href="static/images/favicon.ico" type="image/x-icon">

    <title>FRIGORIFICO</title>
</head>
<body>

    <header class="header">

        <a href="../index.html">
            <p id="main__header">FRIGORIFICO</p>
        </a>

    </header>

    <main class="main">

        <div class="aviso">
            <p id="alert">COMPRA REALIZADA COM SUCESSO!</p>
            <p class="opc">CONTINUAR COMPRANDO: <a id="link" href="../comprar.php">Clique aqui</a></p>
        </div>

    </main>

    <footer>
        <p>Copyright &copy; GitHub: andersonzero0</p>
    </footer>

</body>
</html>


<?php
}
?>