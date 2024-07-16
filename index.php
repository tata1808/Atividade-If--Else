
<?php

function valor($V) {
   
    return count($V);
}

$V = array(1, 2, 3, 4, 5); 

$t = valor($V);

if ($t < 5) {
    echo "leia 5 valores";
} elseif ($t == 5) {
    echo "some os 4 primeiros valores";
} else {
    echo "divida o resultado pelo 5º valor";
}

?>


<?php

function mediaAritmetica($M) {
    return array_sum($M) / count($M);
}

$M = array(1, 2, 3, 4);

$t = count($M);

if ($t < 4) { 
    echo "entre mais notas para calcular a média aritmética simples";
} elseif ($t == 4) {
    echo "calcule a média aritmética simples: " . mediaAritmetica($M);
} else {
    echo "calcule a média aritmética simples: " . mediaAritmetica($M);
}

?>



<?php


echo "Digite o seu nome: ";
$nome = trim(fgets(STDIN));


echo "Digite o primeiro valor: ";
$val1 = (float) trim(fgets(STDIN));

echo "Digite o segundo valor: ";
$val2 = (float) trim(fgets(STDIN));


if ($val2 == 0) {
    echo "Erro: não é possível dividir por zero!";
} else {
  
    $divisao = $val1 / $val2;

   
    echo "Olá, $nome! A divisão entre os dois valores é: $divisao";
}

?>

<?php


echo "Digite o primeiro número inteiro: ";
$num1 = (int) trim(fgets(STDIN));

echo "Digite o segundo número inteiro: ";
$num2 = (int) trim(fgets(STDIN));


$soma = $num1 + $num2;


echo "A soma dos dois números é: $soma";

?>
