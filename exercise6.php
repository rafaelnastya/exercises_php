<html>    
<head>
    <title>EXERCÍCIO 6</title>
    <meta charset="utf-8">
</head>
<body>

    <form method="post">
    <p>Digite o primeiro número:</p>
    <input type="number" name="num1" id="num1"><br>
    <p>Digite o segundo número:</p>
    <input type="number" name="num2" id="num2"><br>
    <input type="submit" value="Gerar números">
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];   
    
        for ($i = $num1; $i <= $num2; $i++) {
            echo $i . " ";
        }
}
echo "<a href='links.php'><br><br>VOLTAR</a>";

//não sei o que fazer se o primeiro número for menor que o segundo
?>
</body>
</html>