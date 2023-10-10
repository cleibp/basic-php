<?php

function soma($a, $b) {
    return $a + $b;
}

$nome = "Cleiton";
$idade = 20;
$sexo = 'M';
$peso = 70.5;
$ativo = true;

$val1 = $val2 = $adicao = $subtracao = $multiplicacao = $divisao = $modulo = 0;

$idadeTernario = $idadeTer = "";
$idadeIF = $dia = $a = $b = $c = $m = $n = 0;

define("PI", 3.14159265);

// Comments
echo "#### ESCREVER NA TELA ####\n";
echo "Olá Mundo\n\n";

// VARIÁVEIS
echo "### VARIÁVEIS E TIPOS BÁSICOS ###\n";
echo "Nome: " . $nome . "\n";
echo "Idade: " . $idade . "\n";
echo "Sexo: " . $sexo . "\n";
echo "Peso: " . $peso . "\n";
echo "Ativo: " . ($ativo ? "true" : "false") . "\n\n";

// CONSTANTE
echo "### CONSTANTE ###\n";
echo "PI: " . PI . "\n\n";

// OPERACOES
echo "#### OPERACOES ####\n";
echo "Informe o valor 1: ";
$val1 = intval(trim(fgets(STDIN)));

echo "Informe o valor 2: ";
$val2 = intval(trim(fgets(STDIN)));

$adicao = $val1 + $val2;
$subtracao = $val1 - $val2;
$multiplicacao = $val1 * $val2;
$divisao = $val1 / $val2;
$modulo = $val1 % $val2;
echo "Soma: " . $adicao . "\n";
echo "Subtracao: " . $subtracao . "\n";
echo "Multiplicacao: " . $multiplicacao . "\n";
echo "Divisao: " . $divisao . "\n";
echo "Modulo: " . $modulo . "\n\n";

// TERNARIO
echo "### TERNARIO ###\n";
echo "Digite um número: ";
$idadeTernario = intval(trim(fgets(STDIN)));
$idadeTer = ($idadeTernario >= 18) ? "Maior de idade" : "Menor de idade";
echo $idadeTer . "\n\n";

// IF ELSE IF ELSE
echo "### IF ELSE IF ELSE ###\n";
echo "Informe a idade: ";
$idadeIF = intval(trim(fgets(STDIN)));
if ($idadeIF < 12) {
    echo "CRIANCA\n";
} elseif ($idadeIF >= 12 && $idadeIF < 18) {
    echo "ADOLESCENTE\n";
} else {
    echo "ADULTO\n";
}
echo "\n";

// CASE
echo "### CASE ###\n";
echo "Informe um numero 1 - 7 para semana: ";
$dia = intval(trim(fgets(STDIN)));
switch ($dia) {
    case 1:
        echo "Domingo\n";
        break;
    case 2:
        echo "Segunda\n";
        break;
    case 3:
        echo "Terça\n";
        break;
    case 4:
        echo "Quarta\n";
        break;
    case 5:
        echo "Quinta\n";
        break;
    case 6:
        echo "Sexta\n";
        break;
    case 7:
        echo "Sabado\n";
        break;
    default:
        echo "Valor nao existente\n";
        break;
}
echo "\n";

// REPEAT
echo "### REPEAT ###\n";
echo "Não tem REPEAT\n\n";

// DO WHILE
echo "### DO WHILE ###\n";
do {
    echo $a . "\n";
    $a = $a + 1;
} while ($a < 10);
echo "\n";

// WHILE
echo "### WHILE ###\n";
while ($b < 10) {
    echo $b . "\n";
    $b = $b + 1;
}
echo "\n";

// FOR
echo "### FOR ###\n";
for ($c = 0; $c < 10; $c++) {
    echo $c . "\n";
}
echo "\n";

// ARRAY
echo "### ARRAY ###\n";
$numbers = [10, 20, 30, 40];

foreach ($numbers as $number) {
    echo "$number\n";
}
echo "\n";

// MATRIZ
echo "### MATRIZ ###\n";
$matriz = [];

// Inicialização da matriz
for ($i = 0; $i < 3; $i++) {
    $matriz[$i] = [];
    for ($j = 0; $j < 3; $j++) {
        $matriz[$i][$j] = $i * 3 + $j + 1;
    }
}

// Acesso aos elementos da matriz
echo "Elementos da matriz:\n";
foreach ($matriz as $row) {
    echo implode(' ', $row) . "\n";
}
echo "\n";


// FUNCAO
echo "### FUNCAO ###\n";
echo "Digite o valor 1: ";
$m = intval(trim(fgets(STDIN)));

echo "Digite o valor 2: ";
$n = intval(trim(fgets(STDIN)));

$resultado = soma($m, $n);
echo "A soma de " . $m . " e " . $n . " é igual a " . $resultado . "\n\n";

// PROCEDURE
echo "### PROCEDURE ###\n";
echo "Não tem PROCEDURE\n\n";

# PONTEIRO
echo "### PONTEIRO ###\n";
echo "Não tem PONTEIRO \n";
echo " Não é necessário liberar memória manualmente, como em C ou C++. A variável será automaticamente coletada pelo coletor de lixo quando não estiver mais em uso. \n";
echo "\n";
