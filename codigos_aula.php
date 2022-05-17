<?php

echo '<h1>hello word!</h1>';

echo "<hr style='height: 20p; background-color:yellow ; border-collapse: separate; border: 20px solid #200; border-color:blue' >";



//declaração e atribuição de variáveis
$nome = "nathan";
$sobrenome = "silva gomes";

//constantes
echo "<hr>";
define('BANCO_DE_DADOS', '../banco_de_dados/bd.sql');

echo  BANCO_DE_DADOS;

echo "<br>";


//concatenando strings
echo $nome ." ". $sobrenome;

$num1 = 22.2;
$num2 = 11;
 
echo "<hr>";

var_dump ($num1);
var_dump ($num2);
                    
// operadores aritmetéticos ( + - * /)
echo "<hr>";

echo ($num1 + $num2) . "<br>";
echo ($num1 - $num2) . "<br>" ; 
echo ($num1 * $num2) . "<br>";
echo ($num1 / $num2) . "<br>";

$n1 = 6.5;
$n2 = 8.9;

$media = ($n1 + $n2) / 2;
echo $media;

//operadores relacionais (de comparação)
/*
iguais        ==
diferente     !=
maior         >
menor         <
maior igual   >=
menor igual   <=
*/

echo "<hr>";

var_dump(
    !($nome == $sobrenome)
);

var_dump(
    !($n1 > $n2)
);

var_dump(
    (strlen($nome) <5)
);

var_dump(
    ($n1 < $n2)

);


var_dump(
    ($n1 != $n2)
);

//operadores lógicos

// AND &&
// OR  ||
// NOT !
// YES !

echo "<hr>";

$login = ("jorel");
$pass = ("tatu");

var_dump(
    ($login == "jorel") &&
    ($pass == "tatu")
);

echo "<hr>";

$cores = [
    "verde",
    "amarelo",
    "vermelho",

];
//echo $cores[0]; . "<br>";
//echo $cores[1]; . "<br>";
//echo $cores[2]; . "<br>";
$sinaleira = $cores[random_int(0,2)];

if($sinaleira == 'verde') {
    echo "<h3 style='color: green' >siga em frente!</h3>'";
} elseif ($sinaleira == 'amarelo') {
    echo "<h3 styl='color: yellow' >atenção!</h3>'";
}else {
    echo "<h3 styl='color: blue'>não pare!</h3>'";
}


//laços de repetição
echo "<hr>";

//FOR => início; condição; incrimento
for($i = 1; $i <= 10; $i++)  {
    echo "9 x $i = " . ($i * 9) . "<br>";
} 

//WHILL => condição
echo "<hr>";
$count = 0;
while($count < 10) {
    echo $count . " - " ;
    $count++;
}


echo "<hr>";
//FOREACH => lista "as" referência 
$pecas = [
    "teclado",
    "mouse",
   "placas" ,
   "monitor",
   "cooler",
   "processador",
   "SSD",
];

//for($i 0; $i < count($pecas);  $i++){
 //   echo $pecas[$i] . " / ";
//}

foreach($pecas as $p) {
    echo $p . " - ";
}

