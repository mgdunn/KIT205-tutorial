<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="author" content="Lawrence-KIT202">
    <title>KIT202 Week 8: Fortune Teller</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <main>
      <?php
      /* This is
      a comment */

      require("functions.php");
      require("heading.php");

      $min = 0;
      $max = 4;
      $magicAnswer = 0;
      $question = "";

      // Answers' source: https://en.wikipedia.org/wiki/Magic_8_Ball
      // $answers = array("It is certain", "As I see it, yes", "Ask again later", "Don't count on it", 42);
      $answers = [ "It is certain", "As I see it, yes", "Ask again later", "Don't count on it" ];
      array_push($answers, "Yes");

      $magicAnswer = generateMagicAnswer();
      // echo $magicAnswer;

      if (isset($_POST["question"])) {
        $question = $_POST["question"];
        // Append a ?
        if (substr($question, -1) !== "?") {
          $question .= "?";
        }
      }
      ?>

      <h2 id="questionRepeat"><?php echo $question ?></h1>

      <div id="ball">
        <div id="answer">
          <?php
          echo $answers[$magicAnswer];

          // echo "<ul>";
          // foreach ($answers as $ans) {
          //   echo "<li style=\"color:blue;\">{$ans}</li>";
          // }
          // echo "</ul>";
          ?>
        </div>
      </div>

      <br>
      <a href="index.html">Ask again</a>
    </main>
  </body>
</html>
