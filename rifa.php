<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador e Rifas</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <form action="./scriptRifa.php" method="POST">

    <div>
        <h1>Gerador de Rifa</h1>
    </div>

    <div>
    
        <label for="premio">Prêmio</label><br>
        <input type="text" name="premio" placeholder="Prêmio"><br>
        
        <label for="data">Data</label><br>
        <input type="date" name="data"><br>
       
        <label for="text">Preco</label><br>
        <input type="preco" name="preco"><br>

        <label for="text">Quantidade</label><br>
        <input type="number" name="quantidade"><br><br>

        <input type="submit" value="Gerar"><br>

    </div>
    </form>
</body>

</html>