<html>    
<head>
    <title>EXERCÍCIO 3</title>
    <meta charset="utf-8">
</head>
<body>
<form method="post">
    <p>Digite uma nota entre zero e dez:</p>
    <input type="number" name="number" id="number"><br>
    <input type="submit" value="Inserir">
</form>
<?php
    
        $nota = $_POST["number"];
    
        while(true)
        if ($nota >= 0 && $nota <= 10) 
        {
            break; // se a nota é válida, sair do loop
        } 
        else 
        {
            echo "Nota inválida. Tente novamente.";
            break;
        }
    

    echo "A nota digitada foi: " . $nota;
    echo "<a href='links.php'><br><br>VOLTAR</a>";
?>
</body>
</html>