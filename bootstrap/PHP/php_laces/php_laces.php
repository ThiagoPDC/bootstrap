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
  <?php include("/xampp/htdocs/xampp/bootstrap/bootstrap/MENU/menu.php");?>
  <div class='container mt-5'>    
    <div class="row">
      <h1>Tabuadas do 1 ao 100</h1>
        <p>Neste exemplo, laços encadeados são usados para construir as tabuadas do 1 ao 100.</p>
      <?php 
        for ($i = 1; $i <= 100 ; $i++ ){
          echo"
            <div class='card bg-dark col-sm-3 m-2'>
            <div class='card-header'>Tábuada do " . $i . ".</div><br>
            <div class='card-body'>";
          for ($ii = 1; $ii <= 10; $ii++ ){
            $iii = $ii * $i;
            echo"$i x $ii = $iii <br>";
          } 
            echo "</div></div>";
        }
      ?>       
    </div>
  </div>
</body>
</html>