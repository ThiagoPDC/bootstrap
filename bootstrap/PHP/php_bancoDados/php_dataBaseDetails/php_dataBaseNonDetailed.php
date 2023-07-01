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
        <h1>Responsive Data List</h1>
        <p>Another way of listing data from a database</p>
        <p>When you click in one of the itens it will be detailed</p>        
        <div class="list-group bg-dark">
            <?php
                include("../bancodadosconexao.php");
                try {
                    $sth = $dbh->prepare('SELECT id, nome, empresa, genero from jogos');
                    $sth->execute();
                    $result = $sth->fetchAll(PDO::FETCH_ASSOC);
                    if(!empty($result)) {
                        echo"<div class= card bg-dark'>
                                <div class='card-body bg-dark'>";
                        foreach($result as $row) {
                            echo "<a href='php_dataBaseDetailing.php?id=".$row["id"]."' class='list-group-item list-group-item-action '>".$row["nome"]."</a>";
                        }
                        echo"</div></div>";
                    } 
                    $dbh = null;
                    } catch (PDOException $e) {
                    print "Error!: " . $e->getMessage();
                    die();
                }
            ?>
        </div>
        <br><br>
    </div>
</body>
</html>

