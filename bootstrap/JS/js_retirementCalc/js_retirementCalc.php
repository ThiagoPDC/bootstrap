<!DOCTYPE html>
<html lang="en">
<head>
  <title>ThiagoPDC</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link href="/bootstrap/style.css" rel="stylesheet">
  <script src="js_retirementCalc.js"></script>
</head>
<body>

<?php include("/xampp/htdocs/xampp/bootstrap/bootstrap/MENU/menu.php");?>

<div class="row">
  <div class="justified">
    <div class="container mt-5">
      <div id="title">
        <h1>Can I retire?</h1>
      </div>
      <div id="RetirementForm">
        <form>   
            <p class="justified">Gender</p> 
            <input type="radio" id="F" name="fav_language" value="F">
            <label for="F">Female</label><br>
            <input type="radio" id="M" name="fav_language" value="M">
            <label for="M">Male</label><br>
            <label for="age">Type your age:</label>
            <input type="number" id="age" name="age" required>
            <br>
            <label for="contribuicao">type the worked period </label>
            <input type="number" id="workedPeriod" name="workedPeriod" required><br>
            <button type="button" onclick='retire()'> Can I?</button>
          </form>

          <div id="retirementScreen">
            <p class="p1" id="after"></p>
          </div>
        </div>
      </div>
    </div>
</div>


</body>
</html>