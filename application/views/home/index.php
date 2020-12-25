<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Theme The Band</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
      .carousel-inner img {
  -webkit-filter: grayscale(90%);
  filter: grayscale(90%); /* make all photos black and white */
  width: 100%; /* Set width to 100% */
  margin: auto;
}

.carousel-caption h3 {
  color: #fff !important;
}

@media (max-width: 500px) {
  .carousel-caption {
    display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
  }
}
  </style>
</head>
<body>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="a.jpg"  width="1200" height="300">
        <div class="carousel-caption">
          <h3></h3>
          <p>.</p>
        </div>      
      </div>

      <div class="item">
        <img src="b.jpg"  width="1200" height="300">
        <div class="carousel-caption">
          <h3></h3>
          <p></p>
        </div>      
      </div>
    
      <div class="item">
        <img src="c.jpg" alt="Los Angeles" width="1200" height="300">
        <div class="carousel-caption">
          <h3></h3>
          <p></p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<div class="container text-center">
  <h3>THE BAND</h3>
  <p><em>We love music!</em></p>
  <br>
  <div class="row">
    <div class="col-sm-4">
      <p class="text-center"><strong>Band</strong></p><br>
      <a href="#demo" data-toggle="collapse">
        <img src="a.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
     
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Band</strong></p><br>
      <a href="#demo2" data-toggle="collapse">
        <img src="b.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
    
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Band</strong></p><br>
      <a href="#demo3" data-toggle="collapse">
        <img src="c.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
    
    </div>
  </div>
</div>

</body>
</html>