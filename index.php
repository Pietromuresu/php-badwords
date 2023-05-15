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
    
    <form>

      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Paragraph</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Put here your paragraph...">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Badword</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Type here the word to censor...">
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

  </div>
</body>
</html>