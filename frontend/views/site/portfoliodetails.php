<?php
/* @var $this yii\web\View */
?>
  <div class="intro intro-single route bg-image" style="background-image: url(assets/img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <h2 class="intro-title mb-4">Portfolio Details</h2>
          <ol class="breadcrumb d-flex justify-content-center">
            <li class="breadcrumb-item">
              <a href="#">Home</a>
            </li>
            <li class="breadcrumb-item active">Portfolio Details</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <main id="main">

    <!-- ======= Portfolio Details Section ======= -->
    <section class="portfolio-details">
      <div class="container">

        <div class="portfolio-details-container">

          <div class="owl-carousel portfolio-details-carousel">
            <img src="<?=yii::$app->request->baseUrl;?>/img/imperial.png" class="img-fluid" alt="">
            <img src="<?=yii::$app->request->baseUrl;?>/img/duka.png" class="img-fluid" alt="">
            <img src="<?=yii::$app->request->baseUrl;?>/img/wbs.png" class="img-fluid" alt="">
            <img src="<?=yii::$app->request->baseUrl;?>/img/stock.PNG" class="img-fluid" alt="">
          </div>

          <div class="portfolio-info">
            <h3>Projects information</h3>
            <ul>
              <li><strong>Category</strong>: Web design</li>
              <li><strong>Project date</strong>: 22 Mar, 2021</li>
            </ul>
          </div>

        </div>

        <div class="portfolio-description">
          <h2>Portfolio detail</h2>
          <p>
            These projects have been developed while others are underway but to be completed soon. Doctor appointment booking system,Duka and Livestock Management System were developed for study purposes and are all complete. Water Billing  System were developed for commercial purposes but are not yet complete. You may need to contact me for more information through +254704081087 and email morriskoome.mk@gmail.com.
          </p>
        </div>
      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->