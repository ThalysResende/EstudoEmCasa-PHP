<!DOCTYPE html>
<html lang="pt-br">
<head>
  <link rel="stylesheet" href="css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Senac - Curso de PHP</title>
</head>

<?php
    $num1 = 0;
    $num2 = 0;
    $resultado = 0;
    $calcular = "somar";

    if (isset($_GET["num1"], $_GET["num2"], $_GET["calcular"])) {
      $num1 = $_GET["num1"];
      $num2 = $_GET["num2"]; 
      $calcular = $_GET["calcular"];

      switch ($calcular) {
        case "somar":
          $resultado = $num1 + $num2;
          break;
        case "subtrair":
          $resultado = $num1 - $num2;
          break;
        case "multiplicar":
          $resultado = $num1 * $num2;
          break;
        case "dividir":
          $resultado = $num1 / $num2;
          break;
        case "porcentagem":
          $resultado = $num1 % $num2;
          break;
      }
  }
?>

<body>
  <form id="section">
      <h1 style="font-size: 24px; text-align: center;">
      Cálcule dois números.
      </h1>
      <label for="" class="labelCal">Número 1:</label>
      <input type="number" name="num1" value=<?= $num1 ?> class="inputNumber1" required>
      <label for="" class="labelCal">Número 2:</label>
      <input type="number" name="num2" value=<?= $num2 ?> class="inputNumber2" required>
      <label for="" class="labelCal">Escolha a operação!</label>
      <br/>
      <select name="calcular" id="selectOpe">
        <option value="somar" <?= ($calcular=="somar")?"Selected":""; ?> >Adição +</option>
        <option value="subtrair" <?= ($calcular=="subtrair")?"Selected":""; ?> >Subtração -</option>
        <option value="multiplicar" <?= ($calcular=="multiplicar")?"Selected":""; ?> >Multiplicação *</option>
        <option value="dividir" <?= ($calcular=="dividir")?"Selected":""; ?> >Divisão /</option>
        <option value="porcentagem" <?= ($calcular=="porcentagem")?"Selected":""; ?> >Módulo %</option>
      </select>
      <button id="buttonCal">Cálcular</button>
      <br/>
      <p style="background-color: #F93; color: #015594; font-weight: 600; padding: 4px;">Resultado: <?= $resultado ?></p>
      <a href="prog4.php"><h3 style="color: #015594;">Reset</h3></a> 
  </form> 
</body>
</html>