<?php
session_start();
include '../functions/functions.php';

$user = $_POST['user'];
$password = $_POST['password'];

$user_valido = lerData('_data-users/user.txt');
$password_valido = lerData('_data-users/password.txt');

if(filesize('_data-users/user.txt') > 0 && filesize('_data-users/password.txt') > 0) {
    if($user == $user_valido && $password == $password_valido) {
        $_SESSION['token'] = time();
        $_SESSION['ultimaAtividade'] = time();
        header('location: ../registro-de-vendas.php');
    }else{
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
                <p id="alert">LOGIN INVALIDO!</p>
                <p class="opc">TENTE NOVAMENTE: <a id="link" href="../login.php">Clique aqui</a></p>
            </div>

        </main>

        <footer>
            <p>Copyright &copy; GitHub: andersonzero0</p>
        </footer>

    </body>
    </html>


    <?php
    }
}else{
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
            <p id="alert">SEJA O PRIMEIRO A SE CADASTRAR!</p>
            <p class="opc">PARA SE CADASTRAR: <a id="link" href="../cadastrar.php">Clique aqui</a></p>
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