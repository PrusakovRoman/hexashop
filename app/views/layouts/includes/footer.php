<footer>
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <div class="first-item">
          <div class="logo">
            <img src="<?= WWW; ?> . /images/white-logo.png" alt="hexashop ecommerce templatemo">
          </div>
          <ul>
            <li><a href="#">16501 Collins Ave, Sunny Isles Beach, FL 33160, United States</a></li>
            <li><a href="#">hexashop@company.com</a></li>
            <li><a href="#">010-020-0340</a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-3">
        <h4>Shopping &amp; Categories</h4>
        <ul>
          <li><a href="#">Men’s Shopping</a></li>
          <li><a href="#">Women’s Shopping</a></li>
          <li><a href="#">Kid's Shopping</a></li>
        </ul>
      </div>
      <div class="col-lg-3">
        <h4>Useful Links</h4>
        <ul>
          <li><a href="#">Homepage</a></li>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Help</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>
      </div>
      <div class="col-lg-3">
        <h4>Help &amp; Information</h4>
        <ul>
          <li><a href="#">Help</a></li>
          <li><a href="#">FAQ's</a></li>
          <li><a href="#">Shipping</a></li>
          <li><a href="#">Tracking ID</a></li>
        </ul>
      </div>
      <div class="col-lg-12">
        <div class="under-footer">
          <p>Copyright © 2022 HexaShop Co., Ltd. All Rights Reserved.

            <br>Design: <a href="https://templatemo.com" target="_parent" title="free css templates">TemplateMo</a>
          </p>
          <ul>
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fa fa-behance"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>


<!-- jQuery -->
<script src="<?= WWW; ?> . /js/jquery-2.1.0.min.js"></script>

<!-- Bootstrap -->
<script src="<?= WWW; ?> . /js/popper.js"></script>
<script src="<?= WWW; ?> . /js/bootstrap.min.js"></script>

<!-- Plugins -->
<script src="<?= WWW; ?> . /js/owl-carousel.js"></script>
<script src="<?= WWW; ?> . /js/accordions.js"></script>
<script src="<?= WWW; ?> . /js/datepicker.js"></script>
<script src="<?= WWW; ?> . /js/scrollreveal.min.js"></script>
<script src="<?= WWW; ?> . /js/waypoints.min.js"></script>
<script src="<?= WWW; ?> . /js/jquery.counterup.min.js"></script>
<script src="<?= WWW; ?> . /js/imgfix.min.js"></script>
<script src="<?= WWW; ?> . /js/slick.js"></script>
<script src="<?= WWW; ?> . /js/lightbox.js"></script>
<script src="<?= WWW; ?> . /js/isotope.js"></script>

<!-- Global Init -->
<script src="<?= WWW; ?> . /js/custom.js"></script>

<script>
  $(function() {
    var selectedClass = "";
    $("p").click(function() {
      selectedClass = $(this).attr("data-rel");
      $("#portfolio").fadeTo(50, 0.1);
      $("#portfolio div").not("." + selectedClass).fadeOut();
      setTimeout(function() {
        $("." + selectedClass).fadeIn();
        $("#portfolio").fadeTo(50, 1);
      }, 500);

    });
  });
</script>

</body>

</html>