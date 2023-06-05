<!DOCTYPE html>
<html lang="en">
<head>
  <title>ThiagoPDC</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link href="/bootstrap/style.css" rel="stylesheet">
</head>
<body>

<?php include("../../menu.php")  ?>

 <?php
    $dir = 'C:\xampp\htdocs\xampp\bootstrap\bootstrap\img';
    $files = scandir($dir);
    
  ?>
<div class="container mt-5 just" >
  <div class="row">
    <?php
      foreach($files as $file){
        if($file!='.' && $file!='..'){
          echo "
            <div class='col-sm-3 card bg-dark m-2'>
              <div class='card-header'> <h3>$file</h3></div>
              <div class='card-body'>
                <img src='/bootstrap/img/$file'>
              </div>
            </div>
          ";
        }
      }
    ?>
  </div>
</div>


</body>
</html>