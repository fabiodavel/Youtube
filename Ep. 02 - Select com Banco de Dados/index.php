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
    <select name="categoria" required>
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

    <button type="submit">Enviar</button>
</form>

</body>
</html>