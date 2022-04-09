<?php
function escreverData($nameArquivo, $conteudo){
		$arquivo = fopen($nameArquivo, 'a');
		fwrite($arquivo, $conteudo);
		fclose($arquivo);
	}

function escreverDataC($nameArquivo, $conteudo){
    $arquivo = fopen($nameArquivo, 'w');
    fwrite($arquivo, $conteudo);
    fclose($arquivo);
}

function lerData($nameArquivo){
    $arquivo = fopen($nameArquivo, 'r');
    if(filesize($nameArquivo) > 0) {
        $tamanho = filesize($nameArquivo);
        $dados = fread($arquivo, $tamanho);
        return $dados;
    }else{
        fclose($arquivo);
    }
}

function validarLogin(){
if(time() - $_SESSION['ultimaAtividade'] <= 60){
    $_SESSION['logado'] = true;
    $_SESSION['ultimaAtividade'] = time();
}else{
    $_SESSION['logado'] = false;
    session_unset();
    session_destroy();
    header('location: ../sessaoexpirada.php');
    }
}
?>