<?php

//$_GET(carrega tudo na url) E $_POST(é o método mais seguro) são arrays de elementos
foreach ($_POST as $key => $value) {
    echo "$key:  $value <br>";
}
?>