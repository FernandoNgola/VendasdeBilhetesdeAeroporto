<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../static/css/style.css">
    <title>Insira seu usuário e senha</title>
</head>

<body>
    <div class="login" id="login">
        <form action="../auth/validar.php" method="post">
            <input type="text" name="usuario" id="usuario" placeholder="Insira seu nome se usuaŕio">
            <input type="text" name="senha" id="senha" placeholder="Insira sua senha">
            <button name="entrar" type="submit">Entrar</button>
        </form>
    </div>
</body>

</html>