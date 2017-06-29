<!DOCTYPE html>
<html>

  <head>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
  </head>

  <body>
    <h1>333312</h1>
    <form method="POST">
    <input type="submit" name="yes" value="YES">
    <a href="/.auth/logout">Test</a> 
    </form>
    <?php
      if(isset($_POST['yes']))
      {
        echo "Hello az";
        header("/.auth/logout");
      }
    ?>
  </body>

</html>
