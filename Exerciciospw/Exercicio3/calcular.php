<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $total = $_POST['total'];
    $formaPagamento = $_POST['pagamento'];

    if ($formaPagamento == 'avista') {
        $desconto = $total * 0.10;
        $valorFinal = $total - $desconto;
        echo "<h1>Resumo do Pagamento</h1>";
        echo "<p>Forma de pagamento: À vista</p>";
        echo "<p>Desconto aplicado: R$" . number_format($desconto, 2, ',', '.') . "</p>";
        echo "<p>Valor final da compra: R$" . number_format($valorFinal, 2, ',', '.') . "</p>";
    } elseif ($formaPagamento == 'prazo') {
        $parcelas = isset($_POST['parcelas']) ? $_POST['parcelas'] : 1;

        if ($parcelas <= 3) {
            $juros = 0;
            $valorFinal = $total;
        } elseif ($parcelas >= 4 && $parcelas <= 6) {
            $juros = $total * 0.10;
            $valorFinal = $total + $juros;
        } elseif ($parcelas > 6) {
            $juros = $total * 0.20;
            $valorFinal = $total + $juros;
        } else {
            $valorFinal = $total; 
        }
        $valorParcela = $valorFinal / $parcelas;

        echo "<h1>Resumo do Pagamento</h1>";
        echo "<p>Forma de pagamento: A prazo</p>";
        echo "<p>Número de parcelas: $parcelas</p>";
        echo "<p>Juros aplicado: R$" . number_format($juros, 2, ',', '.') . "</p>";
        echo "<p>Valor final da compra: R$" . number_format($valorFinal, 2, ',', '.') . "</p>";
        echo "<p>Valor de cada parcela: R$" . number_format($valorParcela, 2, ',', '.') . "</p>";
    }
}
?>
