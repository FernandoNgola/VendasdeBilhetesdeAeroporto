<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar funcionarios</title>
</head>

<body>
    <form action="../controller/insere_funcionario.php" method="post">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome"> <br>

        <label for="idade">Idade</label>
        <input type="number" name="idade" id="idade">

        <label for="identificador">Identificador</label>
        <input type="text" name="identificador" id="identificador">

    </form>
</body>

</html>