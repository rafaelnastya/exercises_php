<html>    
<head>
    <title>EXERCÍCIO 1</title>
    <meta charset="utf-8">
</head>
<body>
<form method="post">
    <p>Digite o seu nome:</p>
    <input type="text" name="nome" id="nome"><br>
    <p>Digite a sua idade:</p>
    <input type="number" name="idade" id="idade"><br>
    <input type="submit" value="Inserir">
</form> <!--o método form method="post" será usado nos exercícios para interação com usuário-->
<?php
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];


    if ($idade >=18)
    {
        echo $nome . " é maior de idade e tem " . $idade . " anos " ;
    }
    else
    {
        echo $nome . " é menor de idade e tem " . $idade . " anos " ;
    }
    
    echo "<a href='links.php'><br><br>VOLTAR</a>";
?>
</body>
</html>