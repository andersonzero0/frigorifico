<?php
session_start();
include '../functions/functions.php';

$user = sha1($_POST['user']);
$password = sha1($_POST['password']);

$user_valido = sha1(lerData('_data-users/user.txt'));
$password_valido = sha1(lerData('_data-users/password.txt'));

if($user == $user_valido && $password == $password_valido) {
    $_SESSION['token'] = time();
	$_SESSION['ultimaAtividade'] = time();
    header('location: ../registro-de-vendas.php');
}else{
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Invalido - Frigorifico</title>
</head>
<body>
    <header>

    </header>

    <main>
        <p>login invalido</p>
        <a href="../login.php">Tente Fazer Login Novamente</a>
    </main>

    <footer>

    </footer>
</body>
</html>


<?php
}
?>