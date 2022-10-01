<?php
$arquivo = $_FILES['arquivo'];
$arquivo_nome = $arquivo['name'];
$ext = explode(".", $arquivo_nome);
$ext = end($ext);

$arquivo_nome = time() . ".{$ext}";

if( move_uploaded_file($arquivo['tmp_name'], "uploads/{$arquivo_nome}") ) {
    echo 'Arquivo enviado com sucesso';
} else {
    echo 'Erro ao enviar o arquivo.';
}
