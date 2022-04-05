<?php
session_start();
include 'functions/functions.php';

if(isset($_SESSION['token'])){
    validarLogin();
    if($_SESSION['logado'] == false) {
        header('location: login.php');
    }else{
        if(filesize('_verif_compra/vendas.txt') > 0) {
            $dados = lerData('_verif_compra/vendas.txt');
            $dados = explode('|', $dados);
        ?>


        <!DOCTYPE html>
        <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <link rel="shortcut icon" href="static/images/favicon.ico" type="image/x-icon">
            <link rel="stylesheet" href="static/css/painel.css">

            <title>FRIGORIFICO - Painel Do Vendedor</title>
        </head>
        <body>
            <header class="header">

            <a href="index.html">
                <p id="main__header">FRIGORIFICO</p>
            </a>

            </header>

            <main class="main">

            <table class="table">
                <tr class="main_coluna">
                    <td>PRODUTO</td>
                    <td>VALOR</td>
                    <td>DATA</td>
                </tr>
                <?php for($i=0;$i<count($dados)-1;$i++) : ?>
                <tr>
                    <td class="opc"><?=$dados[$i]?></td>
                    <td class="opc"><?=$dados[++$i]?></td>
                    <td class="opc"><?=$dados[++$i]?></td>
                </tr>
                <?php endfor ?>
            </table>

            <div class="sair">
                <a href="exit.php">SAIR</a>
            </div>

            </main>

            <footer>
            <p>Copyright &copy; GitHub: andersonzero0</p>
            </footer>
        </body>
        </html>


        <?php
        }else{
        ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="static/css/alert-compra.css">
    <link rel="shortcut icon" href="static/images/favicon.ico" type="image/x-icon">

    <title>FRIGORIFICO</title>
</head>
<body>

    <header class="header">

        <a href="index.html">
            <p id="main__header">FRIGORIFICO</p>
        </a>

    </header>

    <main class="main">

        <div class="aviso">
            <p id="alert">NENHUMA COMPRA REGISTRADA</p>
            <p class="opc">VOLTAR PARA A HOME: <a id="link" href="index.html">Clique aqui</a></p>
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
<?php
    }
}else{
    header('location: index.html');
}
?>