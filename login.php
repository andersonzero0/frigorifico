<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">

    <link rel="shortcut icon" href="static/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="static/css/login.css">

    <title>FRIGORIFICO - Login</title>
</head>
<body>
    <header class="header">

        <a href="index.html">
            <p id="main__header">FRIGORIFICO</p>
        </a>

    </header>

    <main class="main">
        <div class="box__login">

            <form class="form" action="auth/auth_login.php" method="post">
                <legend class="title_login">ACESSAR REGISTRO DE VENDAS</legend>
                <div class="box_label">
                    <label class="label" for="user">USUÁRIO:</label>
                    <input class="input" type="text" name="user" id="user"> <br>
                </div>

                <label class="label" for="password">SENHA:</label>
                <input class="input" type="password" name="password" id="password"> <br>

                <input id="entrar" type="submit" value="ENTRAR">
                <p class="opc">Se ainda não é cadastrado: <a id="link" href="cadastrar.php">cadastra-se</a></p>
            </form>

        </div>
    </main>

    <footer>
        <p>Copyright &copy; GitHub: andersonzero0</p>
    </footer>
</body>
</html>