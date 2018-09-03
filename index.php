<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 8</title>
  </head>
  <body>
    <p>
      <?php
        function sum($firstNumber = 10, $secondNumber = 10, $thirdNumber = 10) {
          echo $firstNumber + $secondNumber + $thirdNumber;
        }
        sum(12,80,15);
       ?>
    </p>
  </body>
</html>
