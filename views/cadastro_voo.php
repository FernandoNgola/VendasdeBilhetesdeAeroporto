<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../static/css/style.css">
    <title>Cadastrar voos</title>
</head>

<body>

    <div class="cadastros">
        <form action="../controller/insere_voo.php" method="post">
        <label for="aeronave">Aeronave</label>
        <select name="aeronave" id="aeronave">
           <option value=""><?php print("Testando PHP em select"); ?></option>
            
        </select> <br>
        <label for="pilotos">Pilotos</label>
        <select name="pilotos" id="pilotos">
            <option value=""><?php echo "<h6>Carregar funcionários pilotos</h6>"; ?></option>

            <?php ?>
        </select> <br>

        <label for="num_passageiros">Nº Passageiros</label>
        <input type="number" name="num_passageiros" id="num_passageiros"> <br>

        <label for="destino">Destino</label>
        <input type="text" name="destino" id="destino"> <br>

        <input type="submit" name="enviar" id="enviar" value = "Enviar">
        <input type="reset" name="limpar" id="limpar" value="Limpar">


    </form>
    </div>    

</body>

</html>