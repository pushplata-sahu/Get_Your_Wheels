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
        <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Pricing <i class="ion-ios-arrow-forward"></i></span></p>
        <h1 class="mb-3 bread">Pricing</h1>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section ftco-cart">
  <div class="container">
    <div class="row">
      <div class="col-md-12 ftco-animate">
        <div class="car-list">
          <table class="table">
            <thead class="thead-primary">
              <tr class="text-center">
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th class="bg-primary heading">Per Hour Rate</th>
                <th class="bg-dark heading">Per Day Rate</th>
                <th class="bg-black heading">Leasing</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $cars = [
                "car-1.jpg",
                "car-2.jpg",
                "car-3.jpg",
                "car-4.jpg",
                "car-5.jpg",
                "car-6.jpg"
              ];

              foreach ($cars as $carImg) {
              ?>
              <tr class="">
                <td class="car-image"><div class="img" style="background-image:url(asset/images/<?php echo $carImg; ?>);"></div></td>
                <td class="product-name">
                  <h3>Chevrolet SUV Car</h3>
                  <p class="mb-0 rated">
                    <span>rated:</span>
                    <span class="ion-ios-star"></span>
                    <span class="ion-ios-star"></span>
                    <span class="ion-ios-star"></span>
                    <span class="ion-ios-star"></span>
                    <span class="ion-ios-star"></span>
                  </p>
                </td>
                <td class="price">
                  <p class="btn-custom"><a href="#">Rent a car</a></p>
                  <div class="price-rate">
                    <h3>
                      <span class="num"><small class="currency">₹</small> 900</span>
                      <span class="per">/per hour</span>
                    </h3>
                    <span class="subheading">₹250/hour fuel surcharges</span>
                  </div>
                </td>
                <td class="price">
                  <p class="btn-custom"><a href="#">Rent a car</a></p>
                  <div class="price-rate">
                    <h3>
                      <span class="num"><small class="currency">₹</small> 5000</span>
                      <span class="per">/per day</span>
                    </h3>
                    <span class="subheading">₹250/hour fuel surcharges</span>
                  </div>
                </td>
                <td class="price">
                  <p class="btn-custom"><a href="#">Rent a car</a></p>
                  <div class="price-rate">
                    <h3>
                      <span class="num"><small class="currency">₹</small> 82000</span>
                      <span class="per">/per month</span>
                    </h3>
                    <span class="subheading">₹250/hour fuel surcharges</span>
                  </div>
                </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- footer section -->
<?php include("footer.php"); ?>
<?php include("script.php"); ?>
