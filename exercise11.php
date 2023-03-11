<html>    
<head>
    <title>EXERCÍCIO 11</title>
    <meta charset="utf-8">
</head>
<body>
<form method="post">
    <p>Digite um valor para cada variável:</p>
    <input type="number" name="number" id="number"><br>
    <input type="number" name="number2" id="number2"><br>
    <input type="submit" value="Inserir">
</form>
<?php

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $A = $_POST["number"];
        $B = $_POST["number2"];
        if($A > $B)
        {
        echo ("Variável A é maior que Variável B");
        }
    
        else
        {
            echo ("Variável B é maior que Variável A ");
        } 
    }
    echo "<a href='links.php'><br><br>VOLTAR</a>";
    
?>
</body>
</html>