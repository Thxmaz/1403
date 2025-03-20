<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livraria</title>
</head>
<body>
    <h1>Bem-vindo à Livraria</h1>
    <form action="calcular.php" method="post">
        <label for="nome">Seu Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="livro">Escolha um Livro:</label>
        <select id="livro" name="livro" required>
            <option value="1">Romance Clássico (R$20,00)</option>
            <option value="2">Ficção Científica (R$25,00)</option>
            <option value="3">História (R$30,00)</option>
            <option value="4">Biografia (R$35,00)</option>
            <option value="5">Autoajuda (R$15,00)</option>
        </select><br><br>

        <label for="quantidade">Quantos livros deseja comprar?</label>
        <input type="number" id="quantidade" name="quantidade" min="1" required><br><br>

        <label for="brinde">Escolha um Brinde:</label>
        <select id="brinde" name="brinde" required>
            <option value="1">Marcador de Página (Grátis)</option>
            <option value="2">Adesivo (R$3,00)</option>
        </select><br><br>

        <input type="submit" value="Calcular Total">
    </form>
</body>
</html>