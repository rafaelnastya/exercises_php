<html>    
<head>
    <title>EXERCÍCIO 9</title>
    <meta charset="utf-8">
</head>
<body>
<form method="post" action="">
    <p>Digite um número:</p>
    <input type="number" name="numero" id="numero"><br>
    <input type="submit" value="Inserir">
</form>

<?php
  
  $numero = $_POST['numero'];

  if ($numero > 0) 
  {
    echo "Positivo";
  } 
  elseif ($numero < 0) 
  {
    echo "Negativo";
  } 
  else 
  {
    echo "Zero <br><br>";
  }
  echo "<a href='links.php'>VOLTAR</a>";
  
?>
</body>
</html>