<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagamento</title>
</head>
<body>
    <h1>Calculadora de Pagamento</h1>
    <form action="calcular.php" method="post">
        <label for="total">Total da Compra (R$):</label>
        <input type="number" id="total" name="total" step="0.01" min="0" required><br><br>

        <label for="pagamento">Escolha a Forma de Pagamento:</label>
        <select id="pagamento" name="pagamento" required>
            <option value="avista">À Vista (10% de Desconto)</option>
            <option value="prazo">A Prazo</option>
        </select><br><br>

        <div id="parcelasDiv" style="display: none;">
            <label for="parcelas">Número de Parcelas (a prazo):</label>
            <input type="number" id="parcelas" name="parcelas" min="1" max="12"><br><br>
        </div>

        <input type="submit" value="Calcular Pagamento">
    </form>

    <script>
        document.getElementById('pagamento').addEventListener('change', function() {
            var parcelasDiv = document.getElementById('parcelasDiv');
            if (this.value === 'prazo') {
                parcelasDiv.style.display = 'block';
            } else {
                parcelasDiv.style.display = 'none';
            }
        });
    </script>
</body>
</html>
