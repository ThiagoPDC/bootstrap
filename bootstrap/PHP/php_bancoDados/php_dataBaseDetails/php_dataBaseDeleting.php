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
    
    <?php include("/xampp/htdocs/xampp/bootstrap/bootstrap/MENU/menu.php"); ?>
    <div class="container-fluid bg-dark mt-3">
        <h1>responsive data list</h1>
        <p>Another way of listing data from a database</p>
        <p>When you click in one of the itens it will be detailed</p>        
        <div class="list-group bg-dark">
            <?php
                include("../bancodadosconexao.php");
                try {
                    $id = $_GET['id'];
                    $stmt = $dbh->prepare("DELETE FROM jogos WHERE id = ?");
                    $stmt->bindParam( 1, $id );
                    if($stmt->execute()) {
                      ?>
                      <div class="alert alert-success" role="alert">
                        Data successufuly deleted!!
                        <br>
                        <a href="php_dataBaseNonDetailed.php">Back</a>
                      </div>
                      <?php
                    }
                } catch (PDOException $e) {
                  print "Error!: " . $e->getMessage();
                  die();
                }
            
            ?>
        <br><br>
    </div>
</body>
</html>

