
<!DOCTYPE html>
<html lang="en">
<head>
  <title>ThiagoPDC</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link href="/bootstrap/style.css" rel="stylesheet">
  <script src="js_interestCalc.js"></script>
</head>
<body>
  
<?php include("/xampp/htdocs/xampp/bootstrap/bootstrap/MENU/menu.php");?>

  <div class="row">
    <div class="con">
      <div class="container mt-5">
        <div id="titulo">
          <h1>Interest Calculator</h1>
      </div>
  
      <div id="formfees">
        <form>    
            <label for="cap">Insira o capital: </label>
            <input type="number" id="cap" name="cap" required><br>
            <label for="rate"> </label>
            <input type="number" id="rate" name="rate" required>%<br>
            <label for="time">Insira o time da aplicação em meses: </label>
            <input type="number" id="time" name="time" required><br>
            <button type="button" onclick='fees()'>Resultado</button>
        </form>
        
       </div>

    <div id="feesScreen">
        <p class="p1" id="fees"></p>
    </div>



      </div>
    </div>
  </div>

</body>
</html>