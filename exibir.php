<meta charset="UTF-8">
<?php
    $host  = "localhost:3306";
    $user  = "root";
    $pass  = "";
    $base  = "pw2";
    $conexao  = mysqli_connect($host, $user, $pass, $base);
    $resultadoQueryMySQL = mysqli_query($conexao, "select * from Carros");

    echo 
    "<table border=3px>
        <tr>
            <td>id</td>
            <td>Montadora</td>
            <td>Modelo</td>
        </tr>";
    while ($escrever=mysqli_fetch_array($resultadoQueryMySQL)) {
        echo
            "</td><td>" . $escrever["id"] .
            "</td><td>" . $escrever["montadora"] .
            "</td><td>" . $escrever["modelo"] . "</td></tr>";

    }

    echo "</table>";
    echo "</br></br>";

    mysqli_close($conexao);
?>