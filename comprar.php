<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprar - Frigorifico</title>
</head>
<body>
    <form action="_verif_compra/registrar_compra.php" method="post">
        <legend>Comprar</legend>

        <label for="produto">Produto:</label>
        <input type="text" name="produto" id="produto"> <br>

        <label for="valor">Valor:</label>
        <input type="text" name="valor" id="valor"> <br>

        <input type="submit" value="Comprar">
    </form>
</body>
</html>