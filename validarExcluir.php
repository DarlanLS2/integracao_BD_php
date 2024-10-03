<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
      $id = $_POST["id"];
      // Conexão com banco
      $host  = "localhost:3306";
      $user  = "root";
      $pass  = "";
      $base  = "carros";
      $conexao  = mysqli_connect($host, $user, $pass, $base);
      // Query
      $input = mysqli_query($conexao, "DELETE FROM Carros WHERE id = '$id'");
      mysqli_close($conexao); // Encerrando a conexão com o banco
      echo "<center><h1>Exclusão bem sucedida!!</h1></center>";
      // Script para redirecionar o user para a pagina de exibição da tablela
      echo 
      "<script>
        setTimeout(function() {
          window.location.href = \"http://localhost/integracao_BD_php/exibir.php\";
        }, 1000);
      </script>";
    }
  ?>
</body>
</html>