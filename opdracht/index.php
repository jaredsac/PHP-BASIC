<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <?php require 'includes/menu.php';?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Title</title> 
    <?php include 'includes/functions.php';?>
  </head>
    <form action="index.php" method="get"><!-- dit laten staan! -->

    <p>Op deze website kun je checken welk datatype je hebt ingevoerd.</p>
    <P>Vul hieronder een getal, een decimaal, een tekst of de tekst true/false in en klik op check!</p> 
    <input type="text" name="input"><!-- dit laten staan! -->
    <button type="submit" name="submit">Check</button><!-- dit laten staan! -->
    <p>Het datatype van de waarde: <?php getInput(); ?> is </p>

    </form><!-- dit laten staan! -->
    <?php require 'includes/footer.php';?>
  </body>
</html>