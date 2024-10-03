<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <center>
    <h2>Insira o id do carro que você quer atualizar e os novos dados:</h2>
    <form action="validarAlteracao.php" method="POST">
      <label for="id">id:</label>
      <input type="text" name="id"/><br><br>
      <label for="marca">marca:</label>
      <input type="text" name="marca" require/><br>
      <label for="modelo">modelo:</label>
      <input type="text" name="modelo" require/><br>
      <input type="submit" value="enviar"/>
    </form>
  </center>
</body>
</html>