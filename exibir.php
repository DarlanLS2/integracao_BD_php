<meta charset="UTF-8">
<?php
  // Conexão com banco
  $host  = "localhost:3306";
  $user  = "root";
  $pass  = "";
  $base  = "carros";
  $conexao  = mysqli_connect($host, $user, $pass, $base);
  $resultadoQueryMySQL = mysqli_query($conexao, "select * from Carros");
  // Exibindo a tabela
  echo 
    "<center>
    <h1>Tabela Carros:</h1>
    <table border=3px>
      <tr>
        <td>id</td>
        <td>Montadora</td>
        <td>Modelo</td>
      </tr>";
  // Inserindo os valores na tabela
  while ($escrever=mysqli_fetch_array($resultadoQueryMySQL)) {
    echo
      "</td><td>" . $escrever["id"] .
      "</td><td>" . $escrever["marca"] .
      "</td><td>" . $escrever["modelo"] . "</td></tr>";
  }
  echo "</table></center>";
  echo "</br></br>";
  mysqli_close($conexao); // Encerrando conexão com banco
?>