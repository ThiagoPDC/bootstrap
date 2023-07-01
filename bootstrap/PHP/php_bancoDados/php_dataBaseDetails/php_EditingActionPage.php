<!DOCTYPE html>
<html lang="en">
<head>
<title>Sistemas Web Responsivos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    
<?php include ("../index/menu.php"); 
 include ("../index/footer.php"); ?>
<br><br>

<div class="div_no_centro ">
  <div class = "main p-5 mt-3 w3-container">
  <h1>Alterar Jogos</h1>
  <h1></h1>
  
  <?php
    include("../bancodadosconexao.php");
    try {
      $stmt = $dbh->prepare("UPDATE jogos SET nome = ?, empresa = ?, genero = ? WHERE id = ?;");
      $stmt->bindParam( 2, $_POST["col-1"] );
      $stmt->bindParam( 3, $_POST["col-2"] );
      $stmt->bindParam( 4, $_POST["col-3"] );
      $stmt->bindParam( 1, $_POST["id"] );
      if($stmt->execute()) {
        ?>
        <div class="alert alert-success" role="alert">
          Registro de Jogos alterado com sucesso!
          <br>
          <a href="php_dataBaseDetailing.php">Voltar</a>
        </div>
        <?php
      }
  } catch (PDOException $e) {
    print "Error!: " . $e->getMessage();
    die();
  }
?>
    

  

</div>
</div>

<br><br>

</body>
</html>

