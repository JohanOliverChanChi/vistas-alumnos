<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Acerca de</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <script type = "text/javascript" src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>           
   <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
</head>
<body>
    <!--inicio del encabezado-->
   
      
    <div class="row">
    <div class="col s3 pink lighten-5"> 
        <div class="row">
            <div class="col s12 ">
              <div class="card">
                <div class="card-image">
                  <img src="Img/music.jpg">
                  <span class="card-title black-text">Musica</span>
                </div>
                <div class="card-content ">
                  <p>
                </div>
                <div class="card-action blue-text">
                  <a href="https://es.wikipedia.org/wiki/Música">Mas Información</a>
                </div>
              </div>
            </div>
          </div>
    </div>
            
    <div class="col s9">
        <div class="card  cyan lighten-5">
            <div class="card-content center">
                <h3>Acerca de la Musica</h3>
                <h6>
                    En lo personal la musica, es lo mejor que puede haber, esta te llena de sentimientos y muchas emociones.
                </h6>
                <div class="carousel carousel-slider" id="demo-carousel-indicators" data-indicators="true">
                    <a class="carousel-item" href="#one!"><img src="Img/Angela.jpg"></a>
                    <a class="carousel-item" href="#two!"><img src="Img/Tini.jpg"></a>
                    <a class="carousel-item" href="#three!"><img src="Img/Carlito.jpg"></a>
                    <a class="carousel-item" href="#four!"><img src="Img/alejandrito.jpg"></a>
                    <a class="carousel-item" href="#five!"><img src="Img/morat.jpeg"></a>
                </div>
                  <h4>
                   Carousel de personas que escucho
                  </h4>
                </div>
           
          </div>
    </div>
    
  
</div>
    <!--Pie de pagina-->
 
 
   
    <script>
        $(document).ready(function(){
         $('#demo-carousel-indicators').carousel({fullWidth: true});
        });
        </script>
        
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>