<!-- head section -->
<?php include("head.php") ?>

<!-- header section -->
<?php include("header.php") ?>
<!-- END nav -->

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('asset/images/hhhh.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
      <div class="col-md-9 ftco-animate pb-5">
        <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Cars <i class="ion-ios-arrow-forward"></i></span></p>
        <h1 class="mb-3 bread">Choose Your Car</h1>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section bg-light">
  <div class="container">
    <div class="row">
      <!-- Repeat block for each car -->
      <?php
        $cars = [
          ["car-1.jpg", "Mercedes Grand Sedan", "Cheverolet"],
          ["car-2.jpg", "Range Rover", "Subaru"],
          ["car-3.jpg", "Mercedes Grand Sedan", "Cheverolet"],
          ["car-4.jpg", "Mercedes Grand Sedan", "Cheverolet"],
          ["car-5.jpg", "Range Rover", "Subaru"],
          ["car-6.jpg", "Mercedes Grand Sedan", "Cheverolet"],
          ["car-7.jpg", "Mercedes Grand Sedan", "Cheverolet"],
          ["car-8.jpg", "Range Rover", "Subaru"],
          ["car-9.jpg", "Mercedes Grand Sedan", "Cheverolet"],
          ["car-10.jpg", "Mercedes Grand Sedan", "Cheverolet"],
          ["car-11.jpg", "Range Rover", "Subaru"],
          ["car-12.jpg", "Mercedes Grand Sedan", "Cheverolet"]
        ];

        foreach ($cars as $car) {
          echo '
          <div class="col-md-4">
            <div class="car-wrap rounded ftco-animate">
              <div class="img rounded d-flex align-items-end" style="background-image: url(asset/images/' . $car[0] . ');"></div>
              <div class="text">
                <h2 class="mb-0"><a href="car-single.html">' . $car[1] . '</a></h2>
                <div class="d-flex mb-3">
                  <span class="cat">' . $car[2] . '</span>
                  <p class="price ml-auto">₹4200 <span>/day</span></p>
                </div>
                <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="car-single.html" class="btn btn-secondary py-2 ml-1">Details</a></p>
              </div>
            </div>
          </div>';
        }
      ?>
    </div>
    <div class="row mt-5">
      <div class="col text-center">
        <div class="block-27">
          <ul>
            <li><a href="#">&lt;</a></li>
            <li class="active"><span>1</span></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">&gt;</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- footer section -->
<?php include("footer.php"); ?>
<?php include("script.php"); ?>
