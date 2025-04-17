<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")


  $idade = $_POST['idade']; ;
  if ($idade >= 16) {
    echo "Você pode votar";
  } else {
    echo "Você nao pode";
  }
?>