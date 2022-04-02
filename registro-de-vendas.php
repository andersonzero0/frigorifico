<?php
session_start();
include 'functions/functions.php';
$dados = lerData('_verif_compra/vendas.txt');
$dados = explode('|', $dados);

if(isset($_SESSION['token'])){
    validarLogin();
    if($_SESSION['logado'] == false) {
        header('location: login.php');
    }else{
?>


<table>
    <tr>
        <td>PRODUTO</td>
        <td>VALOR</td>
        <td>DATA</td>
    </tr>
    <?php for($i=0;$i<count($dados)-1;$i++) : ?>
    <tr>
        <td><?=$dados[$i]?></td>
        <td><?=$dados[++$i]?></td>
        <td><?=$dados[++$i]?></td>
    </tr>
    <?php endfor ?>
</table>
<a href="exit.php">Sair</a>

<?php
    }
}else{
    header('location: index.html');
}
?>