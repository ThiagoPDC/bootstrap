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

<?php include("../menu.php")  ?>
<div class="container mt-5" >
  <div class="row just">
  <div>
      <hr>
        <h3>Congruência, semelhança e relações métricas</h3>
      <hr>
    </div>
  <div class="col-sm-3 card bg-dark m-2" id="Triangulos">
     <div class="card-header"> <h3>Definição</h3></div>
      
     <div class="card-body just"><p>
      <ul>
        <li>Os triângulos são polígonos regulares,
             construídos a partir de três segmentos de reta,
              que formam três ângulos internos. 
            Esses ângulos somam 180º, 
            independentemente da forma geométrica ser mais aberta ou fechada, 
            alta ou baixa.</li>

      </ul>
    </p>
    </div>
  </div>
  <div class="col-sm-3 card bg-dark m-2  just" id="Elementos">
     <div class="card-header"> <h3>Elementos de um triângulo</h3></div>
      
     <div class="card-body just">
      <ul>
        <li>Lados</li>
            <ul><li>são segmentos de reta que se encontram apenas em suas extremidades.</li></ul>
        <li>Vértices</li>
            <ul><li>São os pontos de encontro entre os lados de um triângulo</li></ul>
        <li>Ângulos Internos</li>
            <ul>São ângulos formados por dois lados consecutivos de um triângulo que ficam no seu INTERIOR</ul>   
        <li>Ângulos Externos</li>
            <ul><li>São ângulos formados por dois lados consecutivos de um triângulo que ficam no seu EXTERIOR</li></ul> 
      </ul>
    </div>
  </div>
  <div class="col-sm-3 card bg-dark m-2  just" id="Tipos">
     <div class="card-header"> <h3>Tipos de triângulo</h3></div>
      
     <div class="card-body just">
      <ul>
        <li>Equilátero</li>
            <ul><li>Possui os três lados com medidas iguais</li></ul>           
            <img  class="upscale bg-dark highlight"  src="/bootstrap/images/path286.png" width="25%" alt="">
            
            <li>Escaleno</li>
            <ul><li>Possui os três lados com medidas diferentes</li></ul>
            <img  class="upscale bg-dark highlight"  src="/bootstrap/images/escaleno.png" width="25%" alt="">
        <li>Isóceles</li>
            <ul>Possui dois lados com medidas iguais</ul>   
        <li>Ângulos Externos</li>
            <ul><li>São ângulos formados por dois lados consecutivos de um triângulo que ficam no seu EXTERIOR</li></ul> 
      </ul>
    </div>
  </div>
    </div>
  </div>
</div>
</body>
</html>