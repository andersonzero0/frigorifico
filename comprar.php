<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">

    <link rel="shortcut icon" href="static/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="static/css/comprar.css">

    <title>FRIGORIFICO - Comprar</title>
</head>
<body>

    <header class="header">

        <a href="index.html">
            <p id="main__header">FRIGORIFICO</p>
        </a>

    </header>

    <main class="main">
        <div class="box_compras">
            <form id="form" action="_verif_compra/registrar_compra.php" method="POST">
                <legend class="title">FAZER COMPRAS</legend>

                <div class="box__label">
                    <label class="label" for="produto">PRODUTO:</label>
                    <input class="input" type="text" name="produto" id="produto"> <br>
                </div>

                <div class="box__label">
                    <label class="label" for="valor">VALOR:</label>
                    <input class="input" type="text" name="valor" id="valor"> <br>
                </div>

                <div class="button">
                    <input id="comprar" type="submit" value="COMPRAR">
                </div>
            </form>
        </div>
    </main>

    <footer>
        <p>Copyright &copy; GitHub: andersonzero0</p>
    </footer>

</body>
</html>