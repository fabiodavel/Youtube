<?php
include("includes/conn.php");

$post = filter_input_array(INPUT_POST);

$query = $conn->prepare("INSERT 
  sub_categorias (categoria_id, nome)
  VALUES (:categoria_id, :nome)");

$query->execute($post);

echo 'Subcategoria cadastrada com sucesso.';