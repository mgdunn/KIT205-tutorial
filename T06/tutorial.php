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
        $KangaroosAvg = 0;
        $KoalasAvg = 0;
        $Winner = "Unknown";

        for (i = 0; i < count($Kangaroos); i++) {
          $KangaroosAvg = $KangaroosAvg + $Kangaroos[i];
        }
        $KangaroosAvg = $KangaroosAvg / count($Kangaroos);

        for (i = 0; i < count($Koalas); i++) {
          $KoalasAvg = $KoalasAvg + $Koalas[i];
        }
        $KoalasAvg = $KoalasAvg / count($Koalas);

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
          $KangaroosSum = 0;
          $KoalasSum = 0;
          $Winner = "Unknown";

          for (i = 0; i < count($Kangaroos); i++) {
            $KangaroosSum = $KangaroosSum + $Kangaroos[i];
          }
          
  
          for (i = 0; i < count($Koalas); i++) {
            $KoalasSum = $KoalasSum + $Koalas[i];
          }
          

          if ($KoalasSum + 14 < $KangaroosSum) {
            $Winner = "<strong>Kangaroos</strong> win the trophy!";
        } else if ($KoalasSum > $KangaroosSum + 14) {
            $Winner = "<strong>Koalas</strong> win the trophy!";
        } else {
            $Winner = "<strong>It's a draw!</strong> Both teams win the trophy.";
        }
    
        echo "Task 1: " . $Winner . "\n";
        ?>
        </div>
      </li>
      <li>
        Activity 1, Task 3:
        <div class="answer">
        <?php
               $Kangaroos = [73, 104, 62, 136, 49];
               $Koalas = [55, 112, 78, 137, 91];
               $KangaroosAvg2 = 0;
               $KoalasAvg2 = 0;
               $Winner = "Unknown";
               
         
             echo "Task 1: " . $Winner . "\n";

             function calcAverageScore($game_1, $game_2, $game_3, $game_4, $game_5,) {
                $games = 5

                return ($game_1 + $game_2 + $game_3 + $game_4 + $game_5) / 5;
             }

             function determineWinner($avgKG, $avgGT) {
              global $KangaroosAvg2;
              global $KoalasAvg2;

              if (($avgKG * 1.4) < $avgGT) {
                $Winner = "<strong>Kangaroos</strong> win the trophy by  points! (<strong>$kangaroosAvg2 </strong>vs. $koalasAvg2)";
            } else if ($avgKG > ($avgGT * 1.4)) {
                $Winner = "<strong>Koalas</strong> win the trophy by  points! (<strong>$koalasAvg2 </strong>vs. $kangaroosAvg2)";
            } else {
                $Winner = "Neither team wins the trophy this year.";  
            }
            return $Winner;
             }

             $KangaroosAvg2 = calcAverageScore($Kangaroos[0], $Kangaroos[1], $Kangaroos[2], $Kangaroos[3], $Kangaroos[4]);
             $KoalasAvg2 = calcAverageScore($Koalas[0], $Koalas[1], $Koalas[2], $Koalas[3], $Koalas[4]);
             $Winner = determineWinner($KangaroosAvg2, $KoalasAvg2);

             echo $Winner . "\n";


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
          $netIncome = []

          for (i = 0; i < count($taxableIncome); i++) {
            $taxes[i] = calcTax($grossIncomes[i]);
          }

          for (i = 0; i < count($taxableIncome); i++) {
            $netIncome = $grossIncomes[i] - $taxes[i];
          }

          echo "For an income of $grossIncomes[4], the tax payable is $taxes[4]\n";
          echo "After tax, the net income is $netIncome[4]";

          ?>
        </div>
      </li>
    </ul>
  </body>
</html>
