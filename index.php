<!DOCTYPE html>
<html>

  <head>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
  </head>

  <body>
    <h1>12</h1>
    <form method="POST">
    <input type="submit" name="yes" value="YES">
    
    </form>
    <?php
      if(isset($_POST['yes']))
      {
        echo "Hello Plunker";
        header("/.auth/logout");
      }
    ?>
  </body>

</html>
