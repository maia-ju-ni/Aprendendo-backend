<?php
$a=5;
$b=7;
$c=5;

//igual 

echo ($a==$c).'</br>'.'</br>';

//no exemplo a cima foi mencionado um exemplificação normal sem alterações nas variáveis

$a=5;
$b=7;
$c='5';

//igual 

echo ($a==$c).'</br>'.'</br>';

//neste caso, vai aparecer o número 1 que antigamente era conhecido como o booleano true=verdade ou 0=false=falso
//isso porque foi trocada a classificação de uma das 3 variáveis, no caso $a,$b permanecem inteiro e $'C' se tornou uma string

$a=5;
$b=7;
$c='5';


echo ($a===$c).'</br>'.'</br>';

//neste exemplo a cima precisamos colocar 3 sinais  de igual(=) para fazer uma comparação verdadeira sobre os valores e as classificação das variáveis 
//por isso, ele comparaou um inteiro e uma string e viu que não é verdade esta comparação então a resposta do echo no brownser
//foi nada, como se fosse 0, que significa que não condiz com a informação 



?>