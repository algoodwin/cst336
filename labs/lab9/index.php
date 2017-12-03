<?php
    include 'inc/header.php';
?>
            <style>
                
                
                
                .carousel-control-prev-icon,
.carousel-control-next-icon {
  height: 100px;
  width: 100px;
  outline: black;
  color:black;
  background-size: 100%, 100%;
  border-radius: 50%;
  border: 1px solid black;
  background-color: black;
}

            </style>
        <!-- add Carousel component -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
     <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
     <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
       <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
  
  </ol>
  
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="img-responsive center-block" src="img/alex.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="img-responsive center-block" src="img/bear.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="img-responsive center-block" src="img/carl.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="img-responsive center-block" src="img/charlie.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="img-responsive center-block" src="img/lion.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="img-responsive center-block" src="img/otter.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="img-responsive center-block" src="img/sally.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
        <br /><br />
        <a class="btn btn-outline-primary" href="adoptions.php" role="button">Adopt Now! </a>

        <br /><br />
        <hr>
        
<?php
    include 'inc/footer.php';
?>