<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

   <!--####################### Header Starts Here ###################-->
       <header class="header-com">
           <div class="row no-margin">
               <div class="col-md-4 logo">
                   <a href="index.html">
                    <img src="images/2e820068-de61-48cd-9982-5da76be81bc3_200x200.png" alt="">
                    </a>
               </div>
               <div class="col-lg-6 col-md-8 nav-card">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        
                      
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                            <a class="nav-link" href="index.html">Home </a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#">About Us</a>
                                
                                <!-- <ul class="dropdown-menu megamenu row max200">
                                    <li>
                                        <a class="nav-link" href="about_us.html">sfsdf</a>      
                                    </li>
                                </ul> -->
                            </li>
                            <li class="nav-item dropdown">
                            <a class="dropbtn nav-link" href="#">Services</a>
                                <div class="dropdown-content">
                                    <a href="#">Security Services</a>
                                    <a href="#">Bouncer Services</a>
                                    <a href="#">Celebrity Security Services</a>
                                </div>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#">Gallery</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Carrier</a>
                            </li>
                        </ul>
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </nav>
               </div>
               <!-- <div class="col-md-2 d-none d-lg-block no-padding">
                   <div class="call-div">
                       <div class="ico">
                           <i class="fas fa-phone-volume"></i>
                       </div>
                       <div class="detail">
                           <p>Talk to our experts</p>
                           <b>222 888 9999</b>
                       </div>
                   </div>
               </div> -->
           </div>
       </header>


<div class="wrap">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
</div>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4 about">
                <h2>About Us</h2>
                <p>Since our establishment in the year 2012 we have redefined the quality of delivery standards in this profession. Under the professional guidance and motivation of our experienced mentors Mr. Dinesh Tiwari we have grown to provide security services that have become benchmarks for others in this line. </p>
                
                <div class="foot-address">
                    <div class="icon">
                        <i class="fa fa-map-marker"></i>
                    </div>
                    <div class="addet">
                        A 232, Triveni Nagar, Jaipur 
                    </div>
                </div>
                <div class="foot-address">
                    <div class="icon">
                        <i class="fa fa-envelope-open"></i>
                    </div>
                    <div class="addet">
                        info@Singhamsecurity.com <br>
                        sales@Singhamsecurity.com
                    </div>
                </div>
                <div class="foot-address">
                    <div class="icon">
                         <i class="fa fa-mobile"></i>
                    </div>
                    <div class="addet">
                        +23 323 43434 <br>
                        +1 3232 434 55
                    </div>
                </div>
            </div>
            <div class="col-md-4 fotblog">
                <h2>Latest Testimonials</h2>
                <div class="blohjb">
                    <p>dignissim. Integer tempor facilisis malesuada. Proin ac varius velit, tincidunt condimentum</p>
                    <span>22-1-2019</span>
                </div>
                <div class="blohjb">
                    <p>dignissim. Integer tempor facilisis malesuada. Proin ac varius velit, tincidunt condimentum</p>
                    <span>22-1-2019</span>
                </div>
                <div class="blohjb">
                    <p>dignissim. Integer tempor facilisis malesuada. Proin ac varius velit, tincidunt condimentum</p>
                    <span>22-1-2019</span>
                </div>
            </div>
            <div class="col-md-4 glink">
                <ul>
                    <li>
                    <?= Html::a('<i class="fa fa-angle-double-right"></i> Home',['site/signup'], ['title' => 'Home']) ?>
                    </li>
                    <li><a href="about_us.html"><i class="fa fa-angle-double-right"></i>About Us</a></li>
                    <li><a href="services.html"><i class="fa fa-angle-double-right"></i>Services</a></li>
                    <li><a href="blog.html"><i class="fa fa-angle-double-right"></i>Blog</a></li>
                    <li><a href="pricing.html"><i class="fa fa-angle-double-right"></i>Gallery</a></li>
                    <li><a href="contact_us.html"><i class="fa fa-angle-double-right"></i>Contact Us</a></li>
                </ul>
            </div>
            <!-- <div class="col-md-3 tags">
                <h2>Easy Tags</h2>
                <ul>
                    <li>Finance</li>
                    <li>Web Design</li>
                    <li>Internet Pro</li>
                    <li>Node Js</li>
                    <li>Java Swing</li>
                    <li>Angular Js</li>
                    <li>Vue Js</li>
                </ul>
            </div> -->
        </div>
    </div>
</footer>

<div class="quote quotefixed"> <a href="tel:+919928519150"><span>Get a free</span> <span>quote</span> <br/><br/>
    <span><i class="fa fa-phone"></i>  +91 9928519150</span>
  <div class="freequoteget">  </div>
  </a> 
</div>

<div class="copy">
        <div class="container">
            <a href="https://www.Singhamsecurity.com/">2015 &copy; All Rights Reserved Singham Security Services</a>
            <span>
                <!-- <a href=""><i class="fab fa-github"></i></a> -->
                <a href="https://www.linkedin.com/groups/10411920/"><i class="fa fa-phone"></i></i></a>
                <a href="https://in.pinterest.com/prabnr/pins/"><i class="fa fa-pinterest-p"></i></a>
                <a href="https://twitter.com/prabinraja89"><i class="fa fa-twitter"></i></a>
                <a href="https://www.facebook.com/freewebtemplatesbysmarteye"><i class="fa fa-facebook-f"></i></a>
            </span>
        </div>
</div>
<div id="mouseleave-outer">
<div class="social-facebook" title="Facebook"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></div>
<div class="social-twitter" title="Twitter"><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></div>
<div class="social-hover2" title="phone"><a href="" target="_blank"><i class="fa fa-phone"></i></a></div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
