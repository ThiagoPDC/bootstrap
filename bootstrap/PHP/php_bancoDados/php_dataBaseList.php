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
  <h1>Banco de Dados - Lista Responsiva</h1>
  <p>Listas de dados que cabem na tela do celular</p> 
</div>
  
<div class="container-fluid bg-dark mt-3">
  <h1>Minha Lista</h1>
  <p>Abaixo uma lista com a classe .table-responsive que apresenta um scrool horizontal em telas reduzidas:</p>
    

  <div class="card bg-dark m-2" id="constituicao1937">
  
      <div class="card-body">

    
  <div class="table-responsive text-white">
    <table class="table table-bordered text-white">
      <thead>
        <tr>
          <th>#</th>
          <th>Título do Jogo</th>
          <th>Empresa</th>
          <th>Genero</th>
          <th></th>
        </tr>
      </thead>

        <?php
          include("bancodadosconexao.php");
          try {
            $sth = $dbh->prepare('SELECT nome, empresa, genero from jogos');
            $sth->execute();
            $result = $sth->fetchAll(PDO::FETCH_ASSOC);
            if(!empty($result)) {
              foreach($result as $row) {
                echo "<tr>";
                echo "<td>". $row["nome"] ."</td>";
                echo "<td>". $row["empresa"] ."</td>";
                echo "<td>". $row["genero"] ."</td>";
                echo "</tr>";
              }
            } 
            $dbh = null;
          } catch (PDOException $e) {
            print "Error!: " . $e->getMessage();
            die();
          }
        ?>
      
      </tbody>
    </table>
    <form action="/bootstrap/PHP/php_bancoDados/php_databaseSignUp.php">
      <input class="btn btn-primary" type="submit" value="SignUp page" />
    </form>
  </div>




  </div>
  </div>
  <br>
    </div>


</body>
</html>