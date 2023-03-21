<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body style="background-color: <?php echo $_COOKIE["color"]; ?>">

  <?php
  // echo $_COOKIE["color"];
  ?>

  <form action="colorCookie.php" method="POST">
    <input type="color" name="color">
    <input type="submit" value="Send">
  </form>
</body>

</html>