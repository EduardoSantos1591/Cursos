<?php

// while = Se repete enquanto uma determinada condição for  válida
// do while = Executa um bloco de código enquanto uma determinada condição diga para ele encerrar
// for = Executa um laço de interação controlado
// foreach = Percorre um array e exibe todas as informações

#while

echo '<br> while:';


$i = 0;
while ($i <= 10){
    echo $i;
    $i++;
}

#do...while
echo '<br> do...while:';

$i = 0;
do{
    echo $i;
    $i++;
} while($i < 10);

#for
echo '<br> for:';
for ($i = 0; $i < 10; $i++){
    echo $i;
}

#foreach
echo '<br> foreach:';
$i= [0,1,2,3,4,5,6,7,8,9];
foreach ($i as $j){
    echo $j;
}