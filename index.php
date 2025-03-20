<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lanchonete</title>
</head>
<body>
    <h1>Bem-vindo a Lanchonete</h1>
    <form action="calcular.php" method="post">
        <label for="nome">Seu Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="lanche">Escolha um Lanche:</label>
        <select id="lanche" name="lanche" required>
            <option value="1">X Burguer (R$6,00)</option>
            <option value="2">X Salada (R$8,00)</option>
            <option value="3">X Bacon (R$10,00)</option>
            <option value="4">X Tudo (R$12,00)</option>
            <option value="5">X Duplo (R$15,00)</option>
        </select><br><br>

        <label for="quantidade">Quantos lanches deseja comprar?</label>
        <input type="number" id="quantidade" name="quantidade" min="1" required><br><br>

        <label for="bebida">Escolha uma Bebida:</label>
        <select id="bebida" name="bebida" required>
            <option value="1">Água (R$2,00)</option>
            <option value="2">Suco (R$5,00)</option>
            <option value="3">Lata (R$3,00)</option>
            <option value="4">600 ml (R$5,00)</option>
            <option value="5">2 Litros (R$8,00)</option>
        </select><br><br>

        <input type="submit" value="Calcular Total">
    </form>
</body>
</html>
