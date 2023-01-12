<?php include("includes/conn.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select com PHP e Mysql</title>
</head>
<body>

<form method="post" action="post.php">
    Categoria:
    <br>
    <select name="categoria" id="categoria" required>
        <option value="">Selecione uma categoria</option>
        <?php
        $query = $conn->query("SELECT id, nome FROM categorias ORDER BY nome ASC");
        $registros = $query->fetchAll(PDO::FETCH_ASSOC);

        foreach($registros as $option) {
            ?>
                <option value="<?php echo $option['id']?>"><?php echo $option['nome']?></option>
            <?php
        }
        ?>
    </select>

    <br><br>
    Subcategoria:
    <br>
    <select name="subcategoria" id="subcategoria" required>
        <option value="">Selecione uma categoria</option>
    </select>

    <br>
    <br>
    <button type="submit">Enviar</button>
</form>



<hr>
<h2>Cadastro de Subcategoria</h2>

<form method="post" action="insert_subcategoria.php" id="formCadastroSubCategoria">
    Categoria:
    <br>
    <select name="categoria_id" id="categoria_id" required>
        <option value="">Selecione uma categoria</option>
        <?php
        $query = $conn->query("SELECT id, nome FROM categorias ORDER BY nome ASC");
        $registros = $query->fetchAll(PDO::FETCH_ASSOC);

        foreach($registros as $option) {
            ?>
                <option value="<?php echo $option['id']?>"><?php echo $option['nome']?></option>
            <?php
        }
        ?>
    </select>

    <br>
    <br>
    Nome da Subcategoria:
    <br>
    <input type="text" name="nome" id="nome" required />

    <br>
    <br>
    <button type="submit">Cadastrar Subcategoria</button>
</form>

<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script src="js/funcoes.js"></script>

</body>
</html>