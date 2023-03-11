<html>    
<head>
    <title>EXERCÍCIO 1</title>
    <meta charset="utf-8">
</head>
<body>
<form method="post" action="">
    <p>Digite os números que representam os lados de um triângulo</p>
    <input type="number" name="lado1" id="lado1"><br>
    <input type="number" name="lado2" id="lado2"><br>
    <input type="number" name="lado3" id="lado3"><br>
    <input type="submit" value="Inserir">
</form>
<?php
  
  $lado1 = $_POST['lado1'];
  $lado2 = $_POST['lado2'];
  $lado3 = $_POST['lado3'];

  
  if (($lado1 + $lado2 > $lado3) && ($lado1 + $lado3 > $lado2) && ($lado2 + $lado3 > $lado1)) {
    
    if (($lado1 == $lado2) && ($lado2 == $lado3)) 
    {
      echo "<img src='equilatero.png'>";
    } 
    elseif (($lado1 == $lado2) || ($lado1 == $lado3) || ($lado2 == $lado3)) 
    {
      echo "<img src='isosceles.webp'>";
    } 
    else 
    {
      echo "<img src='escaleno.jpg'>";
    }
  } 
  else 
  {
    echo "Os números informados não formam um triângulo";
  }
  echo "<a href='links.php'><br><br>VOLTAR</a>";

  //poucas combinações de valores formam triângulos, não sei o que fazer para arrumar
?>

</body>
</html>