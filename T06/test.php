<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="author" content="Matthew Dunn">
  <title>KIT202 Tutorial 6: PHP</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>KIT202 Tutorial 6: PHP</h1>
  <p>Edit this file by adding PHP code to produce answers in the boxes below:</p>
  <ul>
    <li>
      Activity 1, Task 1:
      <div class="answer">
      <?php
      $Kangaroos = [70, 102, 46, 117];
      $Koalas = [89, 55, 123, 68];
      $KangaroosAvg = array_sum($Kangaroos) / count($Kangaroos);
      $KoalasAvg = array_sum($Koalas) / count($Koalas);
      $Winner = "Unknown";

      if ($KoalasAvg < $KangaroosAvg) {
        $Winner = "<strong>Kangaroos</strong> win the trophy!";
      } else if ($KoalasAvg > $KangaroosAvg) {
        $Winner = "<strong>Koalas</strong> win the trophy!";
      } else {
        $Winner = "<strong>It's a draw!</strong> Both teams win the trophy.";
      }

      echo "Task 1: " . $Winner . "\n";
      ?>
      </div>
    </li>
    <li>
      Activity 1, Task 2:
      <div class="answer">
      <?php
      $Kangaroos = [93, 142, 135, 100];
      $Koalas = [50, 128, 136, 141];
      $KangaroosSum = array_sum($Kangaroos);
      $KoalasSum = array_sum($Koalas);
      $Winner = "Unknown";

      if ($KoalasSum < $KangaroosSum - 14) {
        $Winner = "<strong>Kangaroos</strong> win the trophy!";
      } else if ($KoalasSum > $KangaroosSum + 14) {
        $Winner = "<strong>Koalas</strong> win the trophy!";
      } else {
        $Winner = "<strong>It's a draw!</strong> Both teams win the trophy.";
      }

      echo "Task 2: " . $Winner . "\n";
      ?>
      </div>
    </li>
    <li>
      Activity 1, Task 3:
      <div class="answer">
      <?php
      $Kangaroos = [73, 104, 62, 136, 49];
      $Koalas = [55, 112, 78, 137, 91];

      function calcAverageScore($games) {
        return array_sum($games) / count($games);
      }

      function determineWinner($avgKG, $avgGT) {
        if ($avgKG * 1.4 < $avgGT) {
          return "<strong>Kangaroos</strong> win the trophy by points! (<strong>$avgKG</strong> vs. $avgGT)";
        } else if ($avgKG > $avgGT * 1.4) {
          return "<strong>Koalas</strong> win the trophy by points! (<strong>$avgGT</strong> vs. $avgKG)";
        } else {
          return "Neither team wins the trophy this year.";
        }
      }

      $KangaroosAvg2 = calcAverageScore($Kangaroos);
      $KoalasAvg2 = calcAverageScore($Koalas);
      $Winner = determineWinner($KangaroosAvg2, $KoalasAvg2);

      echo "Task 3: " . $Winner . "\n";
      ?>
      </div>
    </li>
    <li>
      Activity 2:
      <div class="answer">
        <?php
        $grossIncomes = [43582, 118765, 96239, 27841, 134567, 72419, 61308, 105923, 32674, 88155];

        function calcTax($taxableIncome) {
          if ($taxableIncome > 101000) {
            $taxAmount = $taxableIncome * 0.37;
          } elseif ($taxableIncome > 68250) {
            $taxAmount = $taxableIncome * 0.333;
          } elseif ($taxableIncome > 27500) {
            $taxAmount = $taxableIncome * 0.235;
          } else {
            $taxAmount = $taxableIncome * 0.1425;
          }
          return $taxAmount;
        }

        $taxes = [];
        $netIncome = [];

        for ($i = 0; $i < count($grossIncomes); $i++) {
          $taxes[$i] = calcTax($grossIncomes[$i]);
          $netIncome[$i] = $grossIncomes[$i] - $taxes[$i];
        }

        echo "For an income of $grossIncomes[4], the tax payable is $taxes[4]\n";
        echo "After tax, the net income is $netIncome[4]";
        ?>
      </div>
    </li>
  </ul>
</body>
</html>