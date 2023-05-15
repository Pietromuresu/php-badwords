<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <title>Php Badwords</title>
</head>
<body>
  
  <div class="container mt-5">
    
    <form action="censored-text.php" method="POST">

      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Paragraph</label>

        <div class="form-floating">
          <textarea class="form-control" placeholder="Write here your paragraph..." id="paragraph" style="height: 100px" name="paragraph"></textarea>
          <label for="paragraph">Write here your paragraph...</label>
        </div>
      </div>
      <div class="mb-3">
        <label for="bad_word" class="form-label">Badword</label>
        <input type="text" class="form-control" id="bad_word" placeholder="Type here the word to censor..." name="bad_word">
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

  </div>
</body>
</html>