<?php
include '../functions/functions.php';
$user_cdt = $_POST['user_cdt'];
$password_cdt = $_POST['password_cdt'];

if(empty($user_cdt) && empty($password_cdt)){
    header('location: ../cadastrar.php');
}else{
    escreverDataC('_data-users/user.txt', $user_cdt);
    escreverDataC('_data-users/password.txt', $password_cdt);
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="../static/css/alert-compra.css">
    <link rel="shortcut icon" href="../static/images/favicon.ico" type="image/x-icon">

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
            <p id="alert">CADASTRO FEITO COM SUCESSO!</p>
            <p class="opc">AGORA FAÇA LOGIN: <a id="link" href="../login.php">Clique aqui</a></p>
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