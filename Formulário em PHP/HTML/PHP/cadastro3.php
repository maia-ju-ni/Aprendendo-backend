<?php
if ($_POST['enviar'] == 'Enviar') {
    foreach ($_POST as $key => $value) {
         if ($key <>'locomocao')
         echo "$key:  $value <br>";

    }
    foreach ($_POST['locomocao'] as $key => $value) {
        echo "Locomocao:  $value <br>";
    }

}
?>