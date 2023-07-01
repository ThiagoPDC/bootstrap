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
                    <label for="col-01">Nome do Jogo:</label>
                    <input type="text" class="form-control" id="col-01" placeholder="Jogo" name="col-01">
                </div>
                <div class="col-md-6 mt-1">
                    <label for="col-02">Empresa:</label>
                    <input type="text" class="form-control" id="col-02" placeholder="Empresa" name="col-02">
                </div>
                <div class="col-md-6 mt-1">
                    <label for="col-03">Gênero:</label>
                    <input type="text" class="form-control" id="col-03" placeholder="Gênero" name="col-03">
                </div>
            </div>
            <div class="row">
                <div class="col m-3">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </div>
        </form>
    </div>
    </div>

</body>
</html>