<?php
/* @var $this yii\web\View */
use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
?>


<main id="main">

  <!-- ======= Intro Section ======= -->
  <div id="home" class="intro route bg-image" style="background-image: url(<?=yii::$app->request->baseUrl;?>/img/kom.PNG)">
    <div class="overlay-itro"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <!--<p class="display-6 color-d">Hello, world!</p>-->
          <h1 class="intro-title mb-4">I am Morris Koome</h1>
          <p class="intro-subtitle"><span class="text-slider-items">Web Developer,Web Designer,Frontend Developer</span><strong class="text-slider"></strong></p>
          <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
        </div>
      </div>
    </div>
  </div><!-- End Intro Section -->


    <!-- ======= About Section ======= -->
    <section id="about" class="about-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="box-shadow-full">
              <div class="row">
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-sm-6 col-md-5">
                      <div class="about-img">
                        <img src="<?=yii::$app->request->baseUrl;?>/img/mk.PNG" class="img-fluid rounded b-shadow-a" alt="">
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-7">
                      <div class="about-info">
                        <p><span class="title-s">Name: </span> <span>Morris Koome</span></p>
                        <p><span class="title-s">Profile: </span> <span>Full-stack developer</span></p>
                        <p><span class="title-s">Email: </span> <span>morriskoome.mk@gmail.com</span></p>
                        <p><span class="title-s">Phone: </span> <span> +254704081087</span></p>
                      </div>
                    </div>
                  </div>
                  <div class="skill-mf">
                    <p class="title-s">Skill</p>
                    <span>HTML</span> <span class="pull-right">85%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>CSS3</span> <span class="pull-right">85%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>MySQL</span> <span class="pull-right">80%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>PHP</span> <span class="pull-right">60%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>                   
                    <span>Javascript</span> <span class="pull-right">50%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="about-me pt-4 pt-md-0">
                    <div class="title-box-2">
                      <h5 class="title-left">
                        About me
                      </h5>
                    </div>
                    <p class="lead">
                      Information Technology web developer with intermediate skills in PHP & MySQL, HTML5 and CSS3. Strong information technology Support Technician with a demonstrated history of working in the information technology and services industry. Skilled in providing specialist and help desk support resolving complex IT support issues and natural problem solving to contribute to the development of best practices, procedures and polices within an organization.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="service" class="services-mf pt-5 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Services
              </h3>
              <p class="subtitle-a">
               Create, Serve and Satisfy.
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="ion-monitor"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">Web Design</h2>
                <p class="s-description text-center">
                  A highly competent IT support proffessional with skills and disciplines in the production and maintenance of websites.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="ion-code-working"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">Web Development</h2>
                <p class="s-description text-center">
                  A strong conceptual thinker and imaginative web developer who can come up with great innovative ideas to create websites.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="ion-android-phone-portrait"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">Responsive Design</h2>
                <p class="s-description text-center">
                  Devoted to develop web pages render well on a variety of devices. 
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Services Section -->

    <!-- ======= Counter Section ======= -->
    <div class="section-counter paralax-mf bg-image" style="background-image: url(<?=yii::$app->request->baseUrl;?>/img/work-1.jpg)">
      <div class="overlay-mf"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="ion-checkmark-round"></i></span>
              </div>
              <div class="counter-num">
                <p class="counter">4</p>
                <span class="counter-text">WORKS COMPLETED</span>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="ion-ios-calendar-outline"></i></span>
              </div>
              <div class="counter-num">
                <p class="counter">1</p>
                <span class="counter-text">YEARS OF EXPERIENCE</span>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="ion-ios-people"></i></span>
              </div>
              <div class="counter-num">
                <p class="counter">1</p>
                <span class="counter-text">TOTAL CLIENTS</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Counter Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="work" class="portfolio-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Portfolio
              </h3>
              <p class="subtitle-a">
                Accomplished projects include:
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3">
            <div class="work-box">
              <a href="<?=yii::$app->request->baseUrl;?>/img/sav.PNG" data-gall="portfolioGallery" class="venobox">
                <div class="work-img">
                  <img src="<?=yii::$app->request->baseUrl;?>/img/imperial.png" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-6">
                    <h2 class="w-title">Doctor Appointment Booking system</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Web Design</span> / <span class="w-date">22 March. 2021</span>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="w-like">
                      <a href="<?=Url::to(['site/portfoliodetails']);?> "> <span class="ion-ios-plus-outline"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="work-box">
              <a href="<?=yii::$app->request->baseUrl;?>/img/duka.png" data-gall="portfolioGallery" class="venobox">
                <div class="work-img">
                  <img src="<?=yii::$app->request->baseUrl;?>/img/duka.png" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-6">
                    <h2 class="w-title">Duka </h2>
                    <div class="w-more">
                      <span class="w-ctegory">Web Design</span> / <span class="w-date">11 Sep. 2020</span>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="w-like">
                      <a href="<?=Url::to(['site/portfoliodetails']);?> ">  <span class="ion-ios-plus-outline"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="work-box">
              <a href="<?=yii::$app->request->baseUrl;?>/img/bill.PNG" data-gall="portfolioGallery" class="venobox">
                <div class="work-img">
                  <img src="<?=yii::$app->request->baseUrl;?>/img/wbs.png" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-6">
                    <h2 class="w-title">Water Billing System</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Web Design</span> / <span class="w-date">7 Aug. 2020</span>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="w-like">
                      <a href="<?=Url::to(['site/portfoliodetails']);?> ">  <span class="ion-ios-plus-outline"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
           <div class="col-md-3">
            <div class="work-box">
              <a href="<?=yii::$app->request->baseUrl;?>/img/stock.PNG" data-gall="portfolioGallery" class="venobox">
                <div class="work-img">
                  <img src="<?=yii::$app->request->baseUrl;?>/img/stock.PNG" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-6">
                    <h2 class="w-title">Livestock Management System</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Web Design</span> / <span class="w-date">5 June. 2019</span>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="w-like">
                      <a href="<?=Url::to(['site/portfoliodetails']);?> ">  <span class="ion-ios-plus-outline"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Portfolio Section -->
   

    <!-- ======= Contact Section ======= -->
    <section class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(assets/img/overly-bg.jpg)">
      <div class="overlay-mf"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="contact-mf">
              <div id="contact" class="box-shadow-full">
                <div class="row">
                  <div class="col-md-6">
                    <div class="title-box-2">
                      <h5 class="title-left">
                        Send Message Us
                      </h5>
                    </div>
                    <div>
                      <?php $form = ActiveForm::begin(); ?>

                          <?= $form->field($model, 'name') ?>
                          <?= $form->field($model, 'email') ?>
                          <?= $form->field($model, 'subject') ?>
                          <?= $form->field($model, 'message') ?>
                      
                          <div class="form-group text-center">
                              <?= Html::submitButton('Send Message', ['class' => 'button button-a button-big button-rouded']) ?>
                          </div>
                      <?php ActiveForm::end(); ?>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="title-box-2 pt-4 pt-md-0">
                      <h5 class="title-left">
                        Get in Touch
                      </h5>
                    </div>
                    <div class="more-info">
                      <p class="lead">
                        I look forward to hearing from you! You may reach me by phone or email from 8:00 am to 4:30 pm East African Time.
                      </p>
                      <ul class="list-ico">
                        <li><span class="ion-ios-location"></span> Kimbo-Ruiru </li>
                        <li><span class="ion-ios-telephone"></span> +254704081087</li>
                        <li><span class="ion-email"></span> morriskoome.mk@gmail.com</li>
                      </ul>
                    </div>
                    <div class="socials">
                      <ul>
                        <li><a href="https://web.facebook.com/morizkonshuns.komz/"><span class="ico-circle"><i class="ion-social-facebook"></i></span></a></li>
                        <li><a href="https://www.linkedin.com/in/morris-koome-609918138/"><span class="ico-circle"><i class="ion-social-linkedin-outline"></i></span></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

