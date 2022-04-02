<?php
include '../functions/functions.php';
/*erro*/
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Frigorifico</title>
</head>
<body>
    <header>

    </header>

    <main>
        <p>cadastro concluido</p>
        <a href="../login.php">Fazer Login</a>
    </main>

    <footer>

    </footer>
</body>
</html>


<?php
}
?>