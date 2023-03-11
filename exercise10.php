<html>    
<head>
    <title>EXERCÍCIO 10</title>
    <meta charset="utf-8">
</head>
<body>
<form method="post" action="">
    <p>Digite um número:</p>
    <input type="number" name="numero" id="numero"><br>
    <input type="submit" value="Inserir">
</form>
<?php
    $number = $_POST['numero'];
    if ($number % 2 == 0) //o método usado consiste em calcular o resto da divisão do número por 2. Se o resto for igual a 0, o número é par, caso contrário é ímpar.
    {
        echo "O número é par";
    } 
    else 
    {
        echo "O número é ímpar";
    }
    echo "<a href='links.php'> <br><br>VOLTAR</a>";

?>
</body>
</html>