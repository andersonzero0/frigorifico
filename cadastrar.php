<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">

    <link rel="shortcut icon" href="static/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="static/css/login.css">

    <title>FRIGORIFICO - Cadastrar</title>
</head>
<body>
    <header class="header">

        <a href="index.html">
            <p id="main__header">FRIGORIFICO</p>
        </a>

    </header>

    <main class="main">
        <div class="box__login">

            <form class="form" action="auth/auth_cadastro.php" method="post">
                <legend class="title_login">CADASTRAR USÚARIO</legend>
                <div class="box_label">
                    <label class="label" for="user">USUÁRIO:</label>
                    <input class="input" type="text" name="user_cdt" id="user"> <br>
                </div>

                <label class="label" for="password">SENHA:</label>
                <input class="input" type="password" name="password_cdt" id="password"> <br>

                <input id="cadastrar" type="submit" value="CADASTRAR">
                <p class="opc">Se já é cadastrado: <a id="link" href="login.php">Faça Login</a></p>
            </form>

        </div>
    </main>

    <footer>
        <p>Copyright &copy; GitHub: andersonzero0</p>
    </footer>
</body>
</html>