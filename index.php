<?php
include "calc.php";
?>  
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CALCULADORA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <h1>CALCULADORA</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">Primeiro valor <?php $num1 = $_POST['num1']; echo $num1; ?> </label>
  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Valor 1">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Segundo valor <?php $num1 = $_POST['num2']; echo $num2; ?></label>
  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Valor 2">
</div>
    <select class="form-select" size="3" aria-label="Size 3 select example">
  <option selected>Open this select menu</option>
  <option>Soma <?php function soma($_POST['num1'], $_POST['num2']); ?> </option>
  <option>Subtração <?php function subtracao($_POST['num1'], $_POST['num2']); ?> </option>
  <option>Divisão <?php function divisao($_POST['num1'], $_POST['num2']); ?> </option>
  <option>Muitplicação <?php function multiplicacao($_POST['num1'], $_POST['num2']); ?> </option>
</select>
</body>

</html>
