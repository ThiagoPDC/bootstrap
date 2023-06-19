<!DOCTYPE html>
<html lang="en">
<head>
  <title>ThiagoPDC</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link href="/bootstrap/style.css" rel="stylesheet">
  <script src="js_gradesCalc.js"></script>
</head>
<body>

<?php include("../../menu.php");?>

  <div class="row">
    <div class="con">
      <div class="container mt-5">
        <div id="titulo">
          <h1>Did I graduate??</h1>
      </div>
  
      <div id="formGrade">
          <form>    
              <label for="first">Grade of the first bimester: </label>
              <input type="number" id="first" name="first" required><br>
              <label for="second">Grade of the second bimester:</label>
              <input type="number" id="second" name="second" required><br>
              <label for="third">Grade of the third bimester: </label>
              <input type="number" id="third" name="third" required><br>
              <label for="fourth">Grade of the fourth bimester:</label>
              <input type="number" id="fourth" name="fourth" required><br>
              <label for="frequency">Your fruequency</label>
              <input type="number" id="frequency" name="frequency" required><br>
              <button type="button" onclick='graduated()'>Calculate</button>
          </form>
      </div>  
  
      <div id="telaPassei">
          <p class="p1" id="pass"></p>
      </div>




      </div>
    </div>
  </div>

</body>
</html>