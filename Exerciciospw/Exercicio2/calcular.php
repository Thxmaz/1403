<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $livro = $_POST['livro'];
    $quantidade = $_POST['quantidade'];
    $brinde = $_POST['brinde'];

    switch ($livro) {
        case 1:
            $precoLivro = 20.00;
            $nomeLivro = "Romance Clássico";
            break;
        case 2:
            $precoLivro = 25.00;
            $nomeLivro = "Ficção Científica";
            break;
        case 3:
            $precoLivro = 30.00;
            $nomeLivro = "História";
            break;
        case 4:
            $precoLivro = 35.00;
            $nomeLivro = "Biografia";
            break;
        case 5:
            $precoLivro = 15.00;
            $nomeLivro = "Autoajuda";
            break;
        default:
            $precoLivro = 0;
            $nomeLivro = "Livro inválido";
            break;
    }

    switch ($brinde) {
        case 1:
            $precoBrinde = 0.00;
            $nomeBrinde = "Marcador de Página";
            break;
        case 2:
            $precoBrinde = 3.00;
            $nomeBrinde = "Adesivo";
            break;
        default:
            $precoBrinde = 0;
            $nomeBrinde = "Brinde inválido";
            break;
    }

    $totalLivros = $precoLivro * $quantidade;
    $totalBrinde = $precoBrinde;
    $total = $totalLivros + $totalBrinde;

    echo "<h1>Resumo da Compra</h1>";
    echo "<p>Nome: $nome</p>";
    echo "<p>Livro escolhido: $nomeLivro (Quantidade: $quantidade)</p>";
    echo "<p>Brinde escolhido: $nomeBrinde</p>";
    echo "<p>Total: R$" . number_format($total, 2, ',', '.') . "</p>";
}
?>