<html>    
<head>
    <title>EXERCÍCIO 8</title>
    <meta charset="utf-8">
</head>
<body>
<form method="post" action="">
    <p>Digite um número entre 1 e 50:</p>
    <input type="number" name="tentativa" id="tentativa"><br>
    <input type="submit" value="Adivinhar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $sorteado = rand(1, 50); // rand é uma função para gerar numeros aleatórios entre 1 e 50 ou entre quaisquer números definidos
    $tentativa = $_POST["tentativa"]; 
    
    
    if ($tentativa == $sorteado) 
    {
        echo "Você acertou! O número sorteado foi $sorteado.";
    } 
    else 
    {
        echo "Você errou! O número sorteado foi $sorteado.";
    }
}
echo "<a href='links.php'>VOLTAR</a>";

?>
</body>
</html>