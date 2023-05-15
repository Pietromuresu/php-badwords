<?php 
  $paragraph = $_POST["paragraph"];
  $bad_word = $_POST["bad_word"];
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>censored-text</title>
</head>
<body>
  <h1><?php echo $paragraph ?></h1>
  <h1><?php echo $bad_word ?></h1>
</body>
</html>