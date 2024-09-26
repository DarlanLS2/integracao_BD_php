<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <form action="validarCadastro.php" method="POST">
        <label for="marca">marca:</label>
        <input type="text" name="marca" require/>
        <br>
        <label for="modelo">modelo:</label>
        <input type="text" name="modelo" require/>
        <br>
        <input type="submit" value="enviar"/>
    </form>
    </center>

</body>
</html>