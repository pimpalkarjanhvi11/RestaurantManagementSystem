<!-- index.php -->
<?php include 'template/header.php'; ?>
  <body>
    
    <?php include 'template/nav-bar.php'; ?>
    <!-- END nav -->
    
    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url('images/bg_1.jpg');">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center text-center">
            <div class="col-md-10 col-sm-12 ftco-animate">
              <h1 class="mb-3">Book a table for yourself at a time convenient for you</h1>
            </div>
          </div>
        </div>
      </div>

      <div class="slider-item" style="background-image: url('images/bg_2.jpg');">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center text-center">
            <div class="col-md-10 col-sm-12 ftco-animate">
              <h1 class="mb-3">Tasty &amp; Delicious Food</h1> 
            </div>
          </div>
        </div>
      </div>

      <div class="slider-item" style="background-image: url('images/bg_3.jpg');">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center text-center">
            <div class="col-md-10 col-sm-12 ftco-animate">
              <h1 class="mb-3">Book a table for yourself at a time convenient for you</h1> 
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END slider -->

    <div class="ftco-section-reservation">
      <div class="container">
        <div class="row">
          <div class="col-md-12 reservation pt-5 px-5">
              <p style="font-size: 20px; color: #000;font-weight: bold;margin-top: -30px">Make a Reservation</p>
            <div class="block-17" style="min-height: 100px;">
              
              <form action="restaurant-list.php" method="POST" class="d-block d-lg-flex">
                <div class="fields d-block d-lg-flex">
                  <p style="font-size: 20px;color: #000">Country</p>
                  <div class="select-wrap one-half">
                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                    <select name="city" id="" class="form-control" disabled="">
                      <option value="India">India</option>
                    </select>
                  </div>
                    <p style="font-size: 20px;color: #000">Location</p>
                  <div class="select-wrap one-half">
                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                    <select data-plugin-selectTwo class="form-control populate" name="area" required=""  style="cursor: pointer;">
                      <option value=""> -Select- </option>
                      <?php 
                        include 'dbCon.php';
                        $con = connect();
                        $sql = "SELECT * FROM `locations`;";
                        $result = $con->query($sql);
                        foreach ($result as $r) {
                      ?>
                        <option value="<?php echo $r['id']; ?>"><?php echo $r['location_name']; ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <input type="submit" class="search-submit btn btn-primary" name="find" value="Find">  
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>


    <?php include 'template/font-menu.php'; ?>  
    <section class="ftco-section bg-light">
      <div class="container special-dish"> 
           
            <h3 style="text-align: center;">Our Specialties</h3> 
            Usually, we're all about getting out more. But these are unprecedented times. <br/>

We intend to do everything we can to support our restaurant partners in what is an extremely challenging time for the industry. Please remember that supporting restaurants does not necessarily mean dining out right now, and we would encourage our users to look out for any opportunity to do this - whether that is through buying vouchers to use at a later date, or ordering delivery. If you choose to spread the word on social media around how you’re supporting restaurants, please do let us know and we’ll continue to amplify these messages wherever we’re able.<br/>

We will of course continue to monitor the situation, and adapt as quickly and as sensitively as possible. In terms of our social media and email, you won’t hear the same messaging from us that you’re used to. Right now, we’re solely focused on what’s best for both diners and restaurants.<br/>

You can access the most up to date information surrounding COVID-19 via the World Health Organization, as well as the government's website. We’d urge our entire dining community to keep themselves informed at this time. 
      </div>
    </section>


  <?php include 'template/instagram.php'; ?>

  <?php include 'template/footer.php'; ?>


  <?php include 'template/script.php'; ?>
  
  <script src="dashboard/assets/vendor/jquery/jquery.js"></script>
  <script src="dashboard/assets/vendor/select2/select2.js"></script>
  <script src="dashboard/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
    
  </body>
</html>