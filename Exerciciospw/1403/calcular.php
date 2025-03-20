<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $lanche = $_POST['lanche'];
    $quantidade = $_POST['quantidade'];
    $bebida = $_POST['bebida'];

    switch ($lanche) {
        case 1:
            $precoLanche = 6.00;
            $nomeLanche = "X Burguer";
            break;
        case 2:
            $precoLanche = 8.00;
            $nomeLanche = "X Salada";
            break;
        case 3:
            $precoLanche = 10.00;
            $nomeLanche = "X Bacon";
            break;
        case 4:
            $precoLanche = 12.00;
            $nomeLanche = "X Tudo";
            break;
        case 5:
            $precoLanche = 15.00;
            $nomeLanche = "X Duplo";
            break;
        default:
            $precoLanche = 0;
            $nomeLanche = "Lanche inválido";
            break;
    }

    switch ($bebida) {
        case 1:
            $precoBebida = 2.00;
            $nomeBebida = "Água";
            break;
        case 2:
            $precoBebida = 5.00;
            $nomeBebida = "Suco";
            break;
        case 3:
            $precoBebida = 3.00;
            $nomeBebida = "Lata";
            break;
        case 4:
            $precoBebida = 5.00;
            $nomeBebida = "600 ml";
            break;
        case 5:
            $precoBebida = 8.00;
            $nomeBebida = "2 Litros";
            break;
        default:
            $precoBebida = 0;
            $nomeBebida = "Bebida inválida";
            break;
    }

    $totalLanches = $precoLanche * $quantidade;
    $totalBebida = $precoBebida;
    $total = $totalLanches + $totalBebida;

    
    echo "<h1>Resumo do Pedido</h1>";
    echo "<p>Nome: $nome</p>";
    echo "<p>Lanche escolhido: $nomeLanche (Quantidade: $quantidade)</p>";
    echo "<p>Bebida escolhida: $nomeBebida</p>";
    echo "<p>Total: R$" . number_format($total, 2, ',', '.') . "</p>";
}
?>
