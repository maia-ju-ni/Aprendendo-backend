<?php
$dolares=$_POST['DOLARES'];
$cotacao=$_POST['COTACAO'];
$valorreais=$dolares*$cotacao;

echo "Quantidade de dólares: ".$dolares.'</br>'.'</br>';
echo "cotação dos dólares: ".$cotacao.'</br>'.'</br>';
echo "Valores em reais: ".$valorreais.'</br>'.'</br>';

 ?>
