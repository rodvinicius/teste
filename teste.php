<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
</head>
<body>
    <h1>Respostas</h1>
    <ol>
        <li>Ao final "SOMA" terá o valor de 91.</li><br>
        <li>
        <?php

// Função para verificar se um número pertence à sequência de Fibonacci
function seraFibonacci($n) {
    $a = 0;
    $b = 1;
    while ($a <= $n) {
        if ($a == $n) {
            return true;
        }
        $s = $a + $b;
        $a = $b;
        $b = $s;
    }
    return false;
}

// Número a ser verificado
$numero = 7; // Pode ser alterado para qualquer número desejado

// Inicialização da sequência de Fibonacci


// Verificar se o número pertence à sequência de Fibonacci e exibir mensagem correspondente
if (seraFibonacci($numero)) {
    echo "\nO número $numero pertence à sequência de Fibonacci.\n";
} else {
    echo "\nO número $numero não pertence à sequência de Fibonacci.\n";
}
?>
        </li>
        <br>
        <li>
        a - 9 <br>
        b - 128 <br>
        c - 49 <br>
        d - 100 <br>
        e - 13 <br>
        f - 19
        </li>
        <br>
        <li>
            Eu acendo os dois primeiros interruptores, saio para observar qual sala esta apagada, e logo identifico que ela corresponde ao interruptor 3. 
            Volto para dentro e desligo o primeiro interruptor, saindo novamente para verificar observo que a sala que a segunda sala que apagou é referente ao primeiro interruptor 
            e obviamente a que esta acesa corresponde ao segundo interruptor.
        </li>
        <br>
        <li>
        <?php


$x = "Futuro estagiario";

// Função para inverter a string
function inverterString($str) {
    $y = '';
    $cont = 0;
    while (isset($str[$cont])) {
        $cont++;
    }
    for ($i = $cont - 1; $i >= 0; $i--) {
        $y .= $str[$i];
    }
    return $y;
}


$y = inverterString($x);

$x .= ".";
$y .= ".";


echo "String original: $x<br>";
echo "String invertida: $y";
?>

        </li>
    </ol>
</body>
</html>
    