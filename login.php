<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Frigorifico</title>
</head>
<body>
    <header>

    </header>

    <main>
        <form action="auth/auth_login.php" method="POST">
            <legend>LOGIN</legend>

            <label for="user">USUARIO:</label>
            <input type="text" name="user" id="user"><br>

            <label for="password">SENHA:</label>
            <input type="password" name="password" id="password"><br>

            <input type="submit" value="ENTRAR">
            <p>Se ainda não é cadastrado: <a href="cadastrar.php">cadastra-se</a></p>
        </form>
    </main>

    <footer>

    </footer>
</body>
</html>