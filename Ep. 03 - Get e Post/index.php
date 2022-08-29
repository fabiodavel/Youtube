<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get e Post</title>
</head>
<body>

<?php
foreach($produtos as $codigo => $produto) {
?>
    <a href="get.php?codigo=<?php echo $codigo?>">
        <?php echo $produto['nome'] ?>
    </a>
    |
<?php
}
?>

<br>

<form action="post.php" method="post">
    Nome:
    <input type="text" name="nome" />
    
    <br>
    <br>
    E-mail:
    <input type="email" name="email" />
    
    <br>
    <button type="submit">Enviar</button>
</form>

</body>
</html>