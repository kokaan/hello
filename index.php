<!DOCTYPE html>
<html>

  <head>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
  </head>

  <body>
    <h1>00333311233</h1>
    <form method="POST">
    <input type="submit" name="yes" value="YES">
    <a href="/.auth/logout">Test</a> 
    </form>
    <?php
      $user = $_SERVER['PHP_AUTH_USER']
      if(isset($_POST['yes']))
      {
        echo $user;
        echo "Hello az";
      }
    ?>
  </body>

</html>
