<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/estilo.css">
  <title>Senac - Curso de PHP</title>
</head>

<?php
  if (isset($_GET["nome"], $_GET["idade"], $_GET["sexo"])) {
    $nome = $_GET["nome"];
    $idade = $_GET["idade"];
    $sexo = $_GET["sexo"];
    $regist = "Registrado!";
    $nom = "Nome: ";
    $ida = "Idade: ";
    $sex = "Sexo: ";
  }
?>

<body>
  <form id="section">
      <h1 style="font-size: 24px; text-align: center;">Registro Pessoal.</h1>
      <label for="" class="labelCal">Nome:</label>
      <input type="text" name="nome" class="inputNumber1" required>
      <label for="" class="labelCal">Idade:</label>
      <input type="text" name="idade" class="inputNumber1" required>
      <label for="" class="labelCal">Sexo:</label>
      <input type="text" name="sexo" class="inputNumber1" required>
      <br/>
      <button id="buttonCal" class="btn">Registrar</button>
      <br/>
      <!-- <p class="pp" style="font-size: 14px;">Registrado!<br> Nome: <?= "Registrado!".$nome ?><br> Idade: <?= $idade ?><br> Sexo: <?= $sexo ?> </p> -->
      
      <span style="background-color: #015594; padding: 10px; margin: 0px 10px; color: #fff; letter-spacing: 1px; line-height: 1.2rem; box-shadow: 0px 0px 9px 6px rgba(63, 174, 248, 0.212); border: 1px solid #fff;">   
        <?= $regist ?><br>
        <?= $nom .$nome ?><br>
        <?= $ida .$idade ?><br>
        <?= $sex .$sexo ?><br>
      </span>

      <a href="prog5.php"><h3 style="color: #015594;">Reset</h3></a>
  </form>
  <script>
    var btn = document.querySelector(".btn");
    btn.addEventListener("click", () => {
    });
  </script>
</body>
</html>