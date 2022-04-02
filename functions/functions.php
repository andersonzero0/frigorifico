<?php
function escreverData($nameArquivo, $conteudo){
		$arquivo = fopen($nameArquivo, 'a');
		fwrite($arquivo, $conteudo);
		fclose($arquivo);
	}
?>