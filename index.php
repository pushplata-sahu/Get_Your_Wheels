<!-- head section -->
<?php include("head.php") ?>

<!-- header section -->
<?php include("header.php") ?>





<div class="hero-wrap ftco-degree-bg" style="background-image: url('asset/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
      <div class="col-lg-8 ftco-animate">
        <div class="text w-100 text-center mb-md-5 pb-md-5">
          <h1 class="mb-4">Fast &amp; Easy Way To Rent A Car</h1>
          <p style="font-size: 18px;">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts</p>
          <a href="https://vimeo.com/45830194" class="icon-wrap popup-vimeo d-flex align-items-center mt-4 justify-content-center">
            <div class="icon d-flex align-items-center justify-content-center">
              <span class="ion-ios-play"></span>
            </div>
            <div class="heading-title ml-5">
              <span>Easy steps for renting a car</span>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<section class="ftco-section ftco-no-pt bg-light">
  <div class="container">
    <div class="row no-gutters">
      <div class="col-md-12	featured-top">
        <div class="row no-gutters">
          <div class="col-md-4 d-flex align-items-center">
            <form action="car.php" method="POST" class="request-form ftco-animate bg-primary">
              <h2>Rent Your Car</h2>
              <div class="form-group">
                <label for="" class="label">Pick-up location</label>
                <input type="text" class="form-control" placeholder="City, Airport, Station, etc">
              </div>
              <div class="form-group">
                <label for="" class="label">Drop-off location</label>
                <input type="text" class="form-control" placeholder="City, Airport, Station, etc">
              </div>
              <div class="d-flex">
                <div class="form-group mr-2">
                  <label for="" class="label">Pick-up date</label>
                  <input type="text" class="form-control" id="book_pick_date" placeholder="Date">
                </div>
                <div class="form-group ml-2">
                  <label for="" class="label">Drop-off date</label>
                  <input type="text" class="form-control" id="book_off_date" placeholder="Date">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="label">Pick-up time</label>
                <input type="text" class="form-control" id="time_pick" placeholder="Time">
              </div>
              <div class="form-group">
                <input type="submit" value="Rent A Car Now" class="btn btn-secondary py-3 px-4">
              </div>
            </form>

          </div>
          <div class="col-md-8 d-flex align-items-center">
            <div class="services-wrap rounded-right w-100">
              <h3 class="heading-section mb-4">Better Way to Rent Your Perfect Cars</h3>
              <div class="row d-flex mb-4">
                <div class="col-md-4 d-flex align-self-stretch ftco-animate ">
                  <div class="services w-100 text-center">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-route"></span></div>
                    <div class="text w-100">
                      <h3 class="heading mb-2">Choose Your Pickup Location</h3>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                  <div class="services w-100 text-center">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-handshake"></span></div>
                    <div class="text w-100">
                      <h3 class="heading mb-2">Select the Best Deal</h3>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                  <div class="services w-100 text-center">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-rent"></span></div>
                    <div class="text w-100">
                      <h3 class="heading mb-2">Reserve Your Rental Car</h3>
                    </div>
                  </div>
                </div>
              </div>
              <p><a href="#" class="btn btn-primary py-3 px-4">Reserve Your Perfect Car</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>


<section class="ftco-section ftco-no-pt bg-light">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12 heading-section text-center ftco-animate mb-5">
        <span class="subheading">What we offer</span>
        <h2 class="mb-2">Feeatured Vehicles</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="carousel-car owl-carousel">
          <div class="item">
            <div class="car-wrap rounded ftco-animate">
              <div class="img rounded d-flex align-items-end" style="background-image: url(asset/images/hondacivic.jpg);">
              </div>
              <div class="text">
                <h2 class="mb-0"><a href="#">Honda Civic</a></h2>
                <div class="d-flex mb-3">
                  <span class="cat">5 seater</span>
                  <p class="price ml-auto">4,000 <span>/day</span></p>
                </div>
                <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="#" class="btn btn-secondary py-2 ml-1">Details</a></p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="car-wrap rounded ftco-animate">
              <div class="img rounded d-flex align-items-end" style="background-image: url(asset/images/wagon.jpg);">
              </div>
              <div class="text">
                <h2 class="mb-0"><a href="#">Ford Transit Wagon </a></h2>
                <div class="d-flex mb-3">
                  <span class="cat">10 seater</span>
                  <p class="price ml-auto">8,000<span>/day</span></p>
                </div>
                <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="#" class="btn btn-secondary py-2 ml-1">Details</a></p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="car-wrap rounded ftco-animate">
              <div class="img rounded d-flex align-items-end" style="background-image: url(asset/images/hyundai.jpg);">
              </div>
              <div class="text">
                <h2 class="mb-0"><a href="#">Hyundai Staria</a></h2>
                <div class="d-flex mb-3">
                  <span class="cat">10 seater</span>
                  <p class="price ml-auto">10,000 <span>/day</span></p>
                </div>
                <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="#" class="btn btn-secondary py-2 ml-1">Details</a></p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="car-wrap rounded ftco-animate">
              <div class="img rounded d-flex align-items-end" style="background-image: url(asset/images/safari.jpg);">
              </div>
              <div class="text">
                <h2 class="mb-0"><a href="#">Tata Safari</a></h2>
                <div class="d-flex mb-3">
                  <span class="cat">7 seater</span>
                  <p class="price ml-auto">4,500 <span>/day</span></p>
                </div>
                <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="#" class="btn btn-secondary py-2 ml-1">Details</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section ftco-about">
  <div class="container">
    <div class="row no-gutters">
      <div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(asset/images/about.jpg);">
      </div>
      <div class="col-md-6 wrap-about ftco-animate">
        <div class="heading-section heading-section-white pl-md-5">
          <span class="subheading">About us</span>
          <h2 class="mb-4">Get Your Wheels</h2>

          <p>Welcome to Get Your Wheels, your premier destination for car rentals that cater to every journey and adventure. Whether you're planning a weekend getaway, a business trip, or a cross-country adventure, we have the perfect vehicle to meet your needs.</p>
          <p> At Get Your Wheels, we pride ourselves on providing top-quality cars, exceptional customer service, and competitive rates. With a diverse fleet ranging from compact cars to luxury SUVs, getting on the road has never been easier or more enjoyable. </p>
          <p>Experience the freedom and flexibility of having the right car for any occasion. Get Your Wheels today and drive your dreams!
          </p>
          <p><a href="#" class="btn btn-primary py-3 px-4">Search Vehicle</a></p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-7 text-center heading-section ftco-animate">
        <span class="subheading">Services</span>
        <h2 class="mb-3">Our Latest Services</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3">
        <div class="services services-2 w-100 text-center">
          <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-wedding-car"></span></div>
          <div class="text w-100">
            <h3 class="heading mb-2">Wedding Car Rentals</h3>
            <p>Make your wedding day extraordinary with our elegant wedding car rentals. Choose from our luxurious fleet to arrive in style and enjoy a seamless, unforgettable experience</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="services services-2 w-100 text-center">
          <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-transportation"></span></div>
          <div class="text w-100">
            <h3 class="heading mb-2">Corporate Rentals</h3>
            <p>Enhance your business trips with our premium corporate car rentals. Choose from our executive fleet for reliable, comfortable, and stylish transportation, tailored to meet your professional needs.
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="services services-2 w-100 text-center">
          <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-car"></span></div>
          <div class="text w-100">
            <h3 class="heading mb-2">Airport Transfers</h3>
            <p>Experience hassle-free airport transfers with our reliable car rental service. Enjoy timely pick-ups and drop-offs, ensuring a smooth and comfortable journey to and from the airport.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="services services-2 w-100 text-center">
          <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-transportation"></span></div>
          <div class="text w-100">
            <h3 class="heading mb-2">Whole City Tour</h3>
            <p>Discover the city with our comprehensive airport-to-city tour service. Enjoy a seamless journey from the airport, exploring top attractions and hidden gems in comfort and style.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section ftco-intro" style="background-image: url(asset/images/hhhh.jpg);">
  <div class="overlay"></div>
  <div class="container">
    <div class="row justify-content-end">
      <div class="col-md-6 heading-section heading-section-white ftco-animate">
        <h2 class="mb-3">Unlock the Road to Adventure.</h2>
        <a href="#" class="btn btn-primary btn-lg">Book Your Wheels Now</a>
      </div>
    </div>
  </div>
</section>


<section class="ftco-section testimony-section bg-light">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-7 text-center heading-section ftco-animate">
        <span class="subheading">Testimonial</span>
        <h2 class="mb-3">Happy Clients</h2>
      </div>
    </div>
    <div class="row ftco-animate">
      <div class="col-md-12">
        <div class="carousel-testimony owl-carousel ftco-owl">
          <div class="item">
            <div class="testimony-wrap rounded text-center py-4 pb-5">
              <div class="user-img mb-2" style="background-image: url(asset/images/neetu.jpg)">
              </div>
              <div class="text pt-4">
                <p class="mb-4">The service was outstanding, and the entire experience exceeded my expectations, from start to finish. The car was in excellent condition, and the pick-up and drop-off processes were seamless, saving me time and effort.<br></p>
                <p class="name">Neetu sahu</p>
                <span class="position">First Customer</span>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimony-wrap rounded text-center py-4 pb-5">
              <div class="user-img mb-2" style="background-image: url(asset/images/khushi.jpg)">
              </div>
              <div class="text pt-4">
                <p class="mb-4">Overall, my experience was exceptional. The vehicle surpassed expectations in cleanliness and upkeep, and the team exhibited professionalism and warmth. The return process was equally smooth, solidifying my loyalty to this service for future rentals..</p>
                <p class="name">Khushi Sahu</p>
                <span class="position">Second Customer</span>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimony-wrap rounded text-center py-4 pb-5">
              <div class="user-img mb-2" style="background-image: url(asset/images/aman.jpg)">
              </div>
              <div class="text pt-4">
                <p class="mb-4">From start to finish, my rental experience was top-notch. The vehicle was in excellent condition, and the customer service exceeded my expectations. The seamless pickup and drop-off procedures made the entire process hassle-free, leaving me thoroughly satisfied with my choice</p>
                <p class="name">Aman Thakur</p>
                <span class="position">Third Customer</span>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimony-wrap rounded text-center py-4 pb-5">
              <div class="user-img mb-2" style="background-image: url(asset/images/govind.jpg)">
              </div>
              <div class="text pt-4">
                <p class="mb-4">The service was outstanding, and the entire experience exceeded my expectations, from start to finish. The car was in excellent condition, and the pick-up and drop-off processes were seamless, saving me time and effort.</p>
                <p class="name">Govind Agrawal</p>
                <span class="position">Fourth Customer</span>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimony-wrap rounded text-center py-4 pb-5">
              <div class="user-img mb-2" style="background-image: url(asset/images/ruchi.jpg)">
              </div>
              <div class="text pt-4">
                <p class="mb-4">Overall, my experience was exceptional. The vehicle surpassed expectations in cleanliness and upkeep, and the team exhibited professionalism and warmth. The return process was equally smooth, solidifying my loyalty to this service for future rentals.</p>
                <p class="name">Ruchi Verma</p>
                <span class="position">Fifth Customer</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-7 heading-section text-center ftco-animate">
        <span class="subheading">Blog</span>
        <h2>Recent Blog</h2>
      </div>
    </div>
    <div class="row d-flex">
      <div class="col-md-4 d-flex ftco-animate">
        <div class="blog-entry justify-content-end">
          <a href="blog-single.html" class="block-20" style="background-image: url('asset/images/image_1.jpg');">
          </a>
          <div class="text pt-4">
            <div class="meta mb-3">
              <div><a href="#">Oct. 29, 2019</a></div>
              <div><a href="#">Admin</a></div>
              <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
            </div>
            <h3 class="heading mt-2"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
            <p><a href="#" class="btn btn-primary">Read more</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-4 d-flex ftco-animate">
        <div class="blog-entry justify-content-end">
          <a href="blog-single.html" class="block-20" style="background-image: url('asset/images/image_2.jpg');">
          </a>
          <div class="text pt-4">
            <div class="meta mb-3">
              <div><a href="#">Oct. 29, 2019</a></div>
              <div><a href="#">Admin</a></div>
              <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
            </div>
            <h3 class="heading mt-2"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
            <p><a href="#" class="btn btn-primary">Read more</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-4 d-flex ftco-animate">
        <div class="blog-entry">
          <a href="blog-single.html" class="block-20" style="background-image: url('asset/images/image_3.jpg');">
          </a>
          <div class="text pt-4">
            <div class="meta mb-3">
              <div><a href="#">Oct. 29, 2019</a></div>
              <div><a href="#">Admin</a></div>
              <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
            </div>
            <h3 class="heading mt-2"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
            <p><a href="#" class="btn btn-primary">Read more</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-counter ftco-section img bg-light" id="section-counter">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
        <div class="block-18">
          <div class="text text-border d-flex align-items-center">
            <strong class="number" data-number="60">0</strong>
            <span>Year <br>Experienced</span>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
        <div class="block-18">
          <div class="text text-border d-flex align-items-center">
            <strong class="number" data-number="1090">0</strong>
            <span>Total <br>Cars</span>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
        <div class="block-18">
          <div class="text text-border d-flex align-items-center">
            <strong class="number" data-number="2590">0</strong>
            <span>Happy <br>Customers</span>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
        <div class="block-18">
          <div class="text d-flex align-items-center">
            <strong class="number" data-number="67">0</strong>
            <span>Total <br>Branches</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- footer section -->
<?php include("footer.php"); ?>
<?php include("script.php"); ?>