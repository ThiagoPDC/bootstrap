<!DOCTYPE html>
<html lang="en">
<head>
  <title>ThiagoPDC</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link href="/bootstrap/style.css" rel="stylesheet">
  <script src="example1.js"></script>
</head>
<body>

  <?php include("../../menu.php");?>




    <div class="row">
          <div class="con">
            <div class="container mt-5">
              <div id="receiptScreen">
                <h1>Corn meal cake</h1>
                  <div class="justify" id="CornMealRS">
                      <ul id="cornMealCake">
                      <li>3 eggs</li>
                      <li>2 Teacup(s) of sugar</li>
                      <li>3 Teacup(s) of corn meal</li>
                      <li>3 Table spoons of wheat</li>
                      <li>1/2 Cup(s) kitchen oil</li>
                      <li>1 Cup(s) of milk</li>
                      <li>1 Table spoon(s) of yeast</li>
                    </ul>
                  </div>
          <div id="receiptForm">
            <form>    
              <label for="num">Receipt amount<br> </label>
              <input type="number" id="num" name="num" required>
              <button type="button" onclick='doubleIngredients()'>Calculate</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>





 

</body>
</html>