<meta charset="UTF-8">
<?php
  // Conexão com banco
  $host  = "localhost:3306";
  $user  = "root";
  $pass  = "";
  $base  = "carros";
  $conexao  = mysqli_connect($host, $user, $pass, $base);
  echo "<center><h1>Conexao ok</h1></center>";
  mysqli_close($conexao);// Encerrando conexão com o banco
?>