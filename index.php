<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="criarbanco.php" method="post">
            <input type="text" name="nomebanco" id="nomebanco"
            placeholder="Digite o nome do banco">
            <input type="submit" value="Criar Banco">
    </form>

    <form action="deletar.php" method="post">
            <fieldset>
            <legend>Deletar</legend>
            <input type="text" name="nomebanco" id="nomebanco"
            placeholder="Digite o nome do banco ">
            <input type="submit" value="Deletar Banco">
            </fieldset>
    </form>
</body>
</html>