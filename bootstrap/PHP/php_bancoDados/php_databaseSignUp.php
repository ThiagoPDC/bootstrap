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

    <?php include("/xampp/htdocs/xampp/bootstrap/bootstrap/MENU/menu.php")  ?>

    
    <div class="container-fluid p-1 bg-dark text-white text-center">
        <h1>Banco de Dados - Tela de cadastro</h1>
        <p>Responsividade com Bootstrap e Media Queries</p> 
    </div>
    
    <div class="container-fluid bg-dark m-3">
        <h1>Cadastrar</h1>
        <p>Aqui temos 3 níveis de responsividade:</p>
        <ul>
            <li>Em telas maiores, os campos são apresentados em 2 colunas.</li>
            <li>Em telas menores, aparece apenas 1 coluna de campos.</li>
            <li>Em telas menores de 600px, Media Query é usado para ocultar os <i>labels</i></li>
        </ul>
        <form name="myForm" action="php_dataBaseActionPage.php" onsubmit="return validateForm()" method="post">
            <div class="row">
                <div class="col-md-6 mt-1">
                    <label for="col-01">Coluna 01:</label>
                    <input type="text" class="form-control" id="col-01" placeholder="Valor para coluna 01" name="col-01">
                </div>
                <div class="col-md-6 mt-1">
                    <label for="col-02">Coluna 02:</label>
                    <input type="text" class="form-control" id="col-02" placeholder="Valor para coluna 02" name="col-02">
                </div>
                <div class="col-md-6 mt-1">
                    <label for="col-03">Coluna 03:</label>
                    <input type="text" class="form-control" id="col-03" placeholder="Valor para coluna 03" name="col-03">
                </div>
                <div class="col-md-6 mt-1">
                    <label for="col-04">Coluna 04:</label>
                    <input type="text" class="form-control" id="col-04" placeholder="Valor para coluna 04" name="col-04">
                </div>
                <div class="col-md-6 mt-1">
                    <label for="col-05">Coluna 05:</label>
                    <input type="text" class="form-control" id="col-05" placeholder="Valor para coluna 05" name="col-05">
                </div>
                <div class="col-md-6 mt-1">
                    <label for="col-06 mt-1">Coluna 06:</label>
                    <input type="text" class="form-control" id="col-06" placeholder="Valor para coluna 06" name="col-06">
                </div>
                <div class="col-md-6 mt-1">
                    <label for="col-07">Coluna 07:</label>
                    <input type="text" class="form-control" id="col-07" placeholder="Valor para coluna 07" name="col-07">
                </div>
                <div class="col-md-6 mt-1">
                    <label for="col-08">Coluna 08:</label>
                    <input type="text" class="form-control" id="col-08" placeholder="Valor para coluna 08" name="col-08">
                </div>
                <div class="col-md-6 mt-1">
                    <label for="col-09">Coluna 09:</label>
                    <input type="text" class="form-control" id="col-09" placeholder="Valor para coluna 09" name="col-09">
                </div>
                <div class="col-md-6 mt-1">
                    <label for="col-10">Coluna 10:</label>
                    <input type="text" class="form-control" id="col-10" placeholder="Valor para coluna 10" name="col-10">
                </div>
            </div>
            <div class="row">
                <div class="col m-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
    </div>

</body>
</html>