<!DOCTYPE html>
<html lang="en">
<head>
  <title>ThiagoPDC</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link href="/style.css" rel="stylesheet">
</head>
<body>

<?php include("../../menu.php")  ?>

 <!-- <php 
    $dir = 'C:\xampp\htdocs\xampp\bootstrap\bootstrap\img';
    $files = scandir($dir);
    
  ?>
<div class="container mt-5 just" >
  <div class="row">
    <php
      foreach($files as $file){
        if($file!='.' && $file!='..'){
          echo "
            <div class='col-sm-3 card bg-dark m-2'>
              <div class='card-header'> <h3>$file</h3></div>
              <div class='card-body'>
                <img src='/bootstrap/img/$file'>
              </div>
            </div>
          ";
        }
      }
     ?>
  </div> 
</div>-->

      
<div class="container-fluid p-5 bg-primary text-white text-center">
  <h1>Banco de Dados - Lista Responsiva</h1>
  <p>Listas de dados que cabem na tela do celular</p> 
</div>
  
<div class="container-fluid mt-3">
  <h1>Minha Lista</h1>
  <p>Abaixo uma lista com a classe .table-responsive que apresenta um scrool horizontal em telas reduzidas:</p>
    

  <div class="card bg-dark m-2" id="constituicao1937">
       
      <div class="card-body">

    
  <div class="table-responsive text-white">
    <table class="table table-bordered text-white">
      <thead>
        <tr>
          <th>#</th>
          <th>Coluna 01</th>
          <th>Coluna 02</th>
          <th>Coluna 03</th>
          <th>Coluna 04</th>
          <th>Coluna 05</th>
          <th>Coluna 06</th>
          <th>Coluna 07</th>
          <th>Coluna 08</th>
          <th>Coluna 09</th>
          <th>Coluna 10</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Aqui vai o ID</td>
          <td>Aqui vai o valor da coluna 01</td>
          <td>Aqui vai o valor da coluna 02</td>
          <td>Aqui vai o valor da coluna 03</td>
          <td>Aqui vai o valor da coluna 04</td>
          <td>Aqui vai o valor da coluna 05</td>
          <td>Aqui vai o valor da coluna 06</td>
          <td>Aqui vai o valor da coluna 07</td>
          <td>Aqui vai o valor da coluna 08</td>
          <td>Aqui vai o valor da coluna 09</td>
          <td>Aqui vai o valor da coluna 10</td>
        </tr>

        <?php
          include("bancodadosconexao.php");
          try {
            $sth = $dbh->prepare('SELECT * from minha_tabela');
            $sth->execute();
            $result = $sth->fetchAll(PDO::FETCH_ASSOC);
            if(!empty($result)) {
              foreach($result as $row) {
                echo "<tr>";
                echo "<td>". $row["id"] ."</td>";
                echo "<td>". $row["campo_01"] ."</td>";
                echo "<td>". $row["campo_02"] ."</td>";
                echo "<td>". $row["campo_03"] ."</td>";
                echo "<td>". $row["campo_04"] ."</td>";
                echo "<td>". $row["campo_05"] ."</td>";
                echo "<td>". $row["campo_06"] ."</td>";
                echo "<td>". $row["campo_07"] ."</td>";
                echo "<td>". $row["campo_08"] ."</td>";
                echo "<td>". $row["campo_09"] ."</td>";
                echo "<td>". $row["campo_10"] ."</td>";
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
  </div>




  </div>
  </div>
    </div>


</body>
</html>