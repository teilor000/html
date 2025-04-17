<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pegando os dados do formulário
    $numero1 = $_POST['nmr1'];
    $numero2 = $_POST['nmr2'];
    $soma = $numero1 + $numero2;


    echo  "$soma";
}
?>