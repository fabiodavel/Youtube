<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de contato</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>


<div class="container">
    <div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
        <br><br><br>
        <h2>Entre em contato conosco</h2>
        <form action="enviar.php" method="post">
            <input type="text" name="nome" required placeholder="Seu nome completo" class="form-control" />
            
            <br>
            <input type="email" name="email" required placeholder="E-mail" class="form-control" />

            <br>
            <textarea name="mensagem" required placeholder="Digite sua mensagem aqui." class="form-control"></textarea>
            
            <br>
            <button type="submit" class="btn btn-primary">Enviar Mensagem</button>
        </form>
    </div>
        
    </div>
</div>


</body>
</html>