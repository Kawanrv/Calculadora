<?php
include "calc.php";
$_POST = $num1;
$_POST = $num2;
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
    <form method="post" action="calc.php">
  <div class="mb-3">
    <label for="exampleInput" class="form-label">Número 1<?php $_POST; ?></label>
    <input class="form-control">
  </div>
  <div class="mb-3">
    <label for="exampleInput" class="form-label">Número 2<?php $_POST; ?></label>
    <input class="form-control">
  </div>
  <select method="post" action="calc.php" class="form-select" size="4" aria-label="Size 4 select example">
    <option selected>+ <?php $op = 1; ?> </option>
    <option>- <?php $op = 2; ?> </option>
    <option>/ <?php $op = 3; ?> </option>
    <option>* <?php $op = 4; ?> </option>
  </select>
  <br>
  <button type="submit" class="btn btn-primary">confirme</button>
</form>
</body>

</html>
