<div class="main-banner" id="top">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6">
        <div class="left-content">
          <div class="thumb">
            <div class="inner-content">
              <h4>We Are Hexashop</h4>
              <span>Awesome, clean &amp; creative HTML5 Template</span>
              <div class="main-border-button">
                <a href="#">Purchase Now!</a>
              </div>
            </div>
            <img src="<?= WWW ?> . /images/left-banner-image.jpg" alt="">
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="right-content">
          <div class="row">
            <? foreach ($data->categories as $category) : ?>
              <div class="col-lg-6">
                <div class="right-first-image">
                  <div class="thumb">
                    <div class="inner-content">
                      <h4 style="text-transform: capitalize;"><?= $category->name; ?></h4>
                      <span><?= $category->title; ?></span>
                    </div>
                    <div class="hover-content">
                      <div class="inner">
                        <h4 style="text-transform: capitalize;"><?= $category->name; ?></h4>
                        <p><?= $category->description; ?></p>
                        <div class="main-border-button">
                          <a href="#">Discover More</a>
                        </div>
                      </div>
                    </div>
                    <img src="<?= WWW ?> . <?= $category->image_url ?>">
                  </div>
                </div>
              </div>
            <? endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<section class="section" id="men">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="section-heading">
          <h2>Men's Latest</h2>
          <span>Details to details is what makes Hexashop different from the other themes.</span>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="men-item-carousel">
          <div class="owl-men-item owl-carousel">
            <? foreach ($data->latest_products as $product) :
              if ($product->category_id == 2) : ?>
                <div class="item">
                  <div class="thumb">
                    <div class="hover-content">
                      <ul>
                        <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                        <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
                        <li><a href="single-product.html"><i class="fa fa-shopping-cart"></i></a></li>
                      </ul>
                    </div>
                    <img src="<?= WWW ?> . <?= $product->image_url ?>" alt="">
                  </div>
                  <div class="down-content">
                    <h4><?= $product->name ?></h4>
                    <span>$<?= $product->price ?>.00</span>
                    <ul class="stars">
                      <? for ($i = 1; $i <= $product->stars; $i++) : ?>
                        <li><i class="fa fa-star"></i></li>
                      <? endfor; ?>
                    </ul>
                  </div>
                </div>
            <? endif;
            endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ***** Men Area Ends ***** -->
<? debug($data->socials);
?>
<!-- ***** Women Area Starts ***** -->
<section class="section" id="women">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="section-heading">
          <h2>Women's Latest</h2>
          <span>Details to details is what makes Hexashop different from the other themes.</span>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="women-item-carousel">
          <div class="owl-women-item owl-carousel">
            <? foreach ($data->latest_products as $product) :
              if ($product->category_id == 1) : ?>
                <div class="item">
                  <div class="thumb">
                    <div class="hover-content">
                      <ul>
                        <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                        <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
                        <li><a href="single-product.html"><i class="fa fa-shopping-cart"></i></a></li>
                      </ul>
                    </div>
                    <img src="<?= WWW ?> . <?= $product->image_url ?>" alt="">
                  </div>
                  <div class="down-content">
                    <h4><?= $product->name ?></h4>
                    <span>$<?= $product->price ?>.00</span>
                    <ul class="stars">
                      <? for ($i = 1; $i <= $product->stars; $i++) : ?>
                        <li><i class="fa fa-star"></i></li>
                      <? endfor; ?>
                    </ul>
                  </div>
                </div>
            <? endif;
            endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ***** Women Area Ends ***** -->

<!-- ***** Kids Area Starts ***** -->
<section class="section" id="kids">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="section-heading">
          <h2>Kid's Latest</h2>
          <span>Details to details is what makes Hexashop different from the other themes.</span>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="kid-item-carousel">
          <div class="owl-kid-item owl-carousel">
            <? foreach ($data->latest_products as $product) :
              if ($product->category_id == 3) : ?>
                <div class="item">
                  <div class="thumb">
                    <div class="hover-content">
                      <ul>
                        <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                        <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
                        <li><a href="single-product.html"><i class="fa fa-shopping-cart"></i></a></li>
                      </ul>
                    </div>
                    <img src="<?= WWW ?> . <?= $product->image_url ?>" alt="">
                  </div>
                  <div class="down-content">
                    <h4><?= $product->name ?></h4>
                    <span>$<?= $product->price ?>.00</span>
                    <ul class="stars">
                      <? for ($i = 1; $i <= $product->stars; $i++) : ?>
                        <li><i class="fa fa-star"></i></li>
                      <? endfor; ?>
                    </ul>
                  </div>
                </div>
            <? endif;
            endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section" id="explore">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="left-content">
          <h2>Explore Our Products</h2>
          <span>You are allowed to use this HexaShop HTML CSS template. You can feel free to modify or edit this layout. You can convert this template as any kind of ecommerce CMS theme as you wish.</span>
          <div class="quote">
            <i class="fa fa-quote-left"></i>
            <p>You are not allowed to redistribute this template ZIP file on any other website.</p>
          </div>
          <p>There are 5 pages included in this HexaShop Template and we are providing it to you for absolutely free of charge at our TemplateMo website. There are web development costs for us.</p>
          <p>If this template is beneficial for your website or business, please kindly <a rel="nofollow" href="https://paypal.me/templatemo" target="_blank">support us</a> a little via PayPal. Please also tell your friends about our great website. Thank you.</p>
          <div class="main-border-button">
            <a href="products.html">Discover More</a>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="right-content">
          <div class="row">
            <div class="col-lg-6">
              <div class="leather">
                <h4>Leather Bags</h4>
                <span>Latest Collection</span>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="first-image">
                <img src="<?= WWW ?> . /images/explore-image-01.jpg" alt="">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="second-image">
                <img src="<?= WWW ?> . /images/explore-image-02.jpg" alt="">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="types">
                <h4>Different Types</h4>
                <span>Over 304 Products</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ***** Explore Area Ends ***** -->

<!-- ***** Social Area Starts ***** -->
<section class="section" id="social">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-heading">
          <h2>Social Media</h2>
          <span>Details to details is what makes Hexashop different from the other themes.</span>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row images">
      <? foreach ($data->socials as $social) : ?>
        <div class="col-2">
          <div class="thumb">
            <div class="icon">
              <a href="http://instagram.com">
                <h6><?= $social->title ?></h6>
                <i class="fa fa-instagram"></i>
              </a>
            </div>
            <img src="<?= WWW ?> . <?= $social->image_url ?>" alt="">
          </div>
        </div>
      <? endforeach; ?>
    </div>
  </div>
</section>
<!-- ***** Social Area Ends ***** -->

<!-- ***** Subscribe Area Starts ***** -->
<div class="subscribe">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="section-heading">
          <h2>By Subscribing To Our Newsletter You Can Get 30% Off</h2>
          <span>Details to details is what makes Hexashop different from the other themes.</span>
        </div>
        <form id="subscribe" action="" method="get">
          <div class="row">
            <div class="col-lg-5">
              <fieldset>
                <input name="name" type="text" id="name" placeholder="Your Name" required="">
              </fieldset>
            </div>
            <div class="col-lg-5">
              <fieldset>
                <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email Address" required="">
              </fieldset>
            </div>
            <div class="col-lg-2">
              <fieldset>
                <button type="submit" id="form-submit" class="main-dark-button"><i class="fa fa-paper-plane"></i></button>
              </fieldset>
            </div>
          </div>
        </form>
      </div>
      <div class="col-lg-4">
        <div class="row">
          <div class="col-6">
            <ul>
              <li>Store Location:<br><span>Sunny Isles Beach, FL 33160, United States</span></li>
              <li>Phone:<br><span>010-020-0340</span></li>
              <li>Office Location:<br><span>North Miami Beach</span></li>
            </ul>
          </div>
          <div class="col-6">
            <ul>
              <li>Work Hours:<br><span>07:30 AM - 9:30 PM Daily</span></li>
              <li>Email:<br><span>info@company.com</span></li>
              <li>Social Media:<br><span><a href="#">Facebook</a>, <a href="#">Instagram</a>, <a href="#">Behance</a>, <a href="#">Linkedin</a></span></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>