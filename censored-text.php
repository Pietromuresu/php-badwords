<?php 
  $paragraph = $_POST["paragraph"];
  $bad_word = $_POST["bad_word"];

  $censored_paragraph = strtolower(str_replace(strtoupper($bad_word), '***', strtoupper($paragraph) ));
 
  $len_paragraph = strlen($paragraph);
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <title>censored-text</title>
</head>
<body>
  <div style="height: 100vh" class="container d-flex justify-content-center align-items-center" >
  <div>

    <div>
      <h2 >Before censoring</h2>
      <h5><?php echo ucfirst($paragraph)?></h5>
      <h6>Length: <?php echo $len_paragraph ?></h6>
    </div>
    
    <div class="mt-5">
      <h2>Without bad words</h2>
      <h5><?php echo ucFirst($censored_paragraph)?></h5>
      <h6>Length: <?php echo strlen($censored_paragraph) ?></h6>

    </div>
  </div>

</div>
  </body>
</html>