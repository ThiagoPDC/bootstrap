<!DOCTYPE html>
<html lang="en">
<head>
  <title>ThiagoPDC</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link href="/bootstrap/style.css" rel="stylesheet">
  <script src="/index.js"></script>
</head>
<body>

  <?php include("/xampp/htdocs/xampp/bootstrap/bootstrap/MENU/menu.php"); ?>


  
    <div class="container mt-5">
      <div id="demo" class="carousel slide" data-bs-ride="carousel">

        <!-- Carrousel button -->
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
          <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
          <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        </div>
        <!-- Slide show vids -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <video class="ratio ratio-16x9" muted="" autoplay="" loop=""
              src="/bootstrap/indexImage/carousel-1.mp4" width="950"></video>
          </div>
            
        
        <div class="carousel-item">
          <video class="ratio ratio-16x9" muted="" autoplay="" loop=""
            src="/bootstrap/indexImage/carousel-2.mp4" width="950"></video>
        </div>
        <div class="carousel-item">
          <video class="ratio ratio-16x9" muted="" autoplay="" loop=""
            src="/bootstrap/indexImage/carousel-3.mp4" width="950"></video>
          </div>
        </div>
        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
          <span class="carousel-control-next-icon"></span>
        </button>
      </div>
    </div>
    <div class="container mt-5" >
      <div class="row">
        <!-- Colorimeter card-->
        <div class="col-sm-4 card bg-dark m-2" id="about-colorimeter">
          <div class="item">
          <div class="card-header"><h3>Colorimeter</h3></div>
      <div class="card-body">
        <p>Colorimeter is a an instrument that compares the amount of light getting through a solution with the amount that can get through a sample of pure solvent. In the following project I will be atempting to build one from arduino board and compensated wood. on the video below an colorimeter will be explained in more details</p>  
      </div>
      
      <iframe width=auto src="https://www.youtube.com/embed/voHkIO73vew" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay 1; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
    </div>
    <br><br><br><br><br><br><br><br>
    <div class="col-sm-4 card bg-dark m-2" id="planning">
     <div class="card-header"> <h3>The start planing</h3></div>
      
     <div class="card-body"><p></p>
    </div>
  </div>
</div>



 

</body>
</html>
