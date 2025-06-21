<!-- loader -->
<div id="ftco-loader" class="show fullscreen">
  <svg class="circular" width="48px" height="48px">
    <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
    <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/>
  </svg>
</div>

<!-- All base JS scripts -->
<script src="asset/js/jquery.min.js"></script>
<script src="asset/js/jquery-migrate-3.0.1.min.js"></script>
<script src="asset/js/popper.min.js"></script>
<script src="asset/js/bootstrap.min.js"></script>
<script src="asset/js/jquery.easing.1.3.js"></script>
<script src="asset/js/jquery.waypoints.min.js"></script>
<script src="asset/js/jquery.stellar.min.js"></script>
<script src="asset/js/owl.carousel.min.js"></script>
<script src="asset/js/jquery.magnific-popup.min.js"></script>
<script src="asset/js/aos.js"></script>
<script src="asset/js/jquery.animateNumber.min.js"></script>
<script src="asset/js/bootstrap-datepicker.js"></script>
<script src="asset/js/jquery.timepicker.min.js"></script>
<script src="asset/js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="asset/js/google-map.js"></script>
<script src="asset/js/main.js"></script>

<!-- Custom contact form AJAX -->
<script>
  $(document).ready(function () {
    $('#contactForm').on('submit', function (e) {
      e.preventDefault(); // Prevent default form submission

      $.ajax({
        url: 'admin/contact.php', // Backend PHP
        type: 'POST',
        data: $(this).serialize(),
        success: function (response) {
          alert("✅ Thank you for contacting us!");
          $('#contactForm')[0].reset(); // Reset the form
        },
        error: function () {
          alert("❌ Something went wrong. Please try again.");
        }
      });
    });
  });
</script>
