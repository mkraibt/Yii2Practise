<?php

/* @var $this yii\web\View */

$this->title = 'Atlantic Digital';

use yii\helpers\Html;
use yii\helpers\Url;
?>

<div id="home" class="header-hero bg_cover d-lg-flex align-items-center" style="background-image: url(assets/images/header-hero.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="header-hero-content">
                    <h1 class="hero-title wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"><b>Your</b> <span>Consultancy</span> Partner for <b>Growth.</b></h1>
                    <p class="text wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">Phasellus vel elit efficitur, gravida libero sit amet, scelerisque  tortor arcu, commodo sit amet nulla sed.</p>
                    <div class="header-singup wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.8s">
                        <input type="text" placeholder="username@yourdomain.com">
                        <button class="main-btn">Sign Up</button>
                    </div>
                </div> <!-- header hero content -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
    <div class="header-hero-image d-flex align-items-center wow fadeInRightBig" data-wow-duration="1s" data-wow-delay="1.1s">
        <div class="image">
            <?=Html::img(Url::to('@web/img/hero-image.png'), ['alt'=>'Hero Image'])?>
        </div>
    </div> <!-- header hero image -->
</div> <!-- header hero -->
</header>

<!--====== HEADER PART ENDS ======-->

<!--====== ABOUT PART START ======-->

<section id="about" class="about-area pt-115">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="about-title text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                    <h6 class="welcome">WELCOME</h6>
                    <h3 class="title"><span>Our 10 years working experience to </span> take care of your business goal.</h3>
                </div>
            </div>
        </div> <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="about-image mt-60 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                    <?=Html::img(Url::to('@web/img/about.png'), ['alt'=>'about']);?>
                </div> <!-- about image -->
            </div>
        </div> <!-- row -->
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="about-content pt-45">
                    <p class="text wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">Duis et metus et massa tempus lacinia. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas ultricies, orci molestie blandit interdum. ipsum ante pellentesque nisl, eget mollis turpis quam nec eros. ultricies, orci molestie blandit interdum.</p>

                    <div class="about-counter pt-60">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="single-counter counter-color-1 mt-30 d-flex wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                                    <div class="counter-shape">
                                        <span class="shape-1"></span>
                                        <span class="shape-2"></span>
                                    </div>
                                    <div class="counter-content media-body">
                                        <span class="counter-count"><span class="counter">350</span></span>
                                        <p class="text">Clients</p>
                                    </div>
                                </div> <!-- single counter -->
                            </div>
                            <div class="col-sm-4">
                                <div class="single-counter counter-color-2 mt-30 d-flex wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                                    <div class="counter-shape">
                                        <span class="shape-1"></span>
                                        <span class="shape-2"></span>
                                    </div>
                                    <div class="counter-content media-body">
                                        <span class="counter-count"><span class="counter">99</span>%</span>
                                        <p class="text">Satisfaction</p>
                                    </div>
                                </div> <!-- single counter -->
                            </div>
                            <div class="col-sm-4">
                                <div class="single-counter counter-color-3 mt-30 d-flex wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.9s">
                                    <div class="counter-shape">
                                        <span class="shape-1"></span>
                                        <span class="shape-2"></span>
                                    </div>
                                    <div class="counter-content media-body">
                                        <span class="counter-count"><span class="counter">870</span></span>
                                        <p class="text">Projects</p>
                                    </div>
                                </div> <!-- single counter -->
                            </div>
                        </div> <!-- row -->
                    </div> <!-- about counter -->
                </div> <!-- about content -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== ABOUT PART ENDS ======-->

<!--====== OUR SERVICE PART START ======-->

<section id="services" class="our-services-area pt-115">
    <div class="container">
        <div class="header-hero-content text-center">
            <h1 class="hero-title wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"><b>You are using</b> <span>Free</span> Lite Version</b></h1>
            <p style="font-size: 20px;">Please, purchase full version to get all sections, pages and features</p></br>
            <a href="http://rebrand.ly/consult-ud" rel="nofollow" class="main-btn">Purchase Now</a>
        </div> <!-- header hero content -->
    </div>
</section>


<!--====== PRICING PART START ======-->

<section data-scroll-index="0" id="pricing" class="pricing-area pt-115">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-8 col-sm-9">
                <div class="section-title text-center pb-20 wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.2s">
                    <h6 class="sub-title">Pricing Plans</h6>
                    <h4 class="title">Providing Best Pricing <span>For Your Business.</span></h4>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
        <div class="row no-gutters justify-content-center">
            <div class="col-lg-4 col-md-7 col-sm-9">
                <div class="single-pricing text-center pricing-color-1 mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                    <div class="pricing-price">
                        <span class="price"><b>50</b>/m.<span class="symbol">$</span></span>
                    </div>
                    <div class="pricing-title mt-20">
                        <span class="btn">20% Off</span>
                        <h4 class="title">Basic</h4>
                    </div>
                    <div class="pricing-list pt-20">
                        <ul>
                            <li>Full Access</li>
                            <li>Unlimited Bandwidth</li>
                            <li>50 gb Space</li>
                            <li>1 Month Support</li>
                        </ul>
                    </div>
                    <div class="pricing-btn pt-70">
                        <a class="main-btn main-btn-2" href="#">Sign Up Now !</a>
                    </div>
                </div> <!-- single pricing -->
            </div>
            <div class="col-lg-4 col-md-7 col-sm-9">
                <div class="single-pricing text-center pricing-active pricing-color-2 mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                    <div class="pricing-price">
                        <span class="price"><b>69</b>/m.<span class="symbol">$</span></span>
                    </div>
                    <div class="pricing-title mt-20">
                        <span class="btn">Special</span>
                        <h4 class="title">Standard</h4>
                    </div>
                    <div class="pricing-list pt-20">
                        <ul>
                            <li>Full Access</li>
                            <li>Unlimited Bandwidth</li>
                            <li>50 gb Space</li>
                            <li>1 Month Support</li>
                        </ul>
                    </div>
                    <div class="pricing-btn pt-70">
                        <a class="main-btn" href="#">Sign Up Now !</a>
                    </div>
                </div> <!-- single pricing -->
            </div>
            <div class="col-lg-4 col-md-7 col-sm-9">
                <div class="single-pricing text-center pricing-color-3 mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.9s">
                    <div class="pricing-price">
                        <span class="price"><b>99</b>/m.<span class="symbol">$</span></span>
                    </div>
                    <div class="pricing-title mt-20">
                        <span class="btn">New</span>
                        <h4 class="title">Premium</h4>
                    </div>
                    <div class="pricing-list pt-20">
                        <ul>
                            <li>Full Access</li>
                            <li>Unlimited Bandwidth</li>
                            <li>50 gb Space</li>
                            <li>1 Month Support</li>
                        </ul>
                    </div>
                    <div class="pricing-btn pt-70">
                        <a class="main-btn main-btn-2" href="#">Sign Up Now !</a>
                    </div>
                </div> <!-- single pricing -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== PRICING PART ENDS ======-->


<!--====== BRAND PART START ======-->

<div id="brand" class="brand-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="brand-wrapper pt-70 clearfix">
                    <div class="single-brand mt-50 text-md-left wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <?= Html::img(Url::to('@web/img/brand-1.png', ['alt'=>'brand']))?>
                    </div> <!-- single brand -->
                    <div class="single-brand mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                        <?= Html::img(Url::to('@web/img/brand-2.png', ['alt'=>'brand']))?>
                    </div> <!-- single brand -->
                    <div class="single-brand mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                        <?= Html::img(Url::to('@web/img/brand-3.png', ['alt'=>'brand']))?>
                    </div> <!-- single brand -->
                    <div class="single-brand mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                        <?= Html::img(Url::to('@web/img/brand-4.png', ['alt'=>'brand']))?>
                    </div> <!-- single brand -->
                    <div class="single-brand mt-50 text-md-right wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                        <?= Html::img(Url::to('@web/img/brand-5.png', ['alt'=>'brand']))?>
                    </div> <!-- single brand -->
                </div> <!-- brand wrapper -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</div>

<!--====== BRAND PART ENDS ======-->

<!--====== BLOG PART START ======-->

<section id="blog" class="blog-area pt-115">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="section-title text-center pb-20 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                    <h6 class="sub-title">Our Blog</h6>
                    <h4 class="title">Letest <span>News.</span></h4>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="single-blog mt-30 wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.4s">
                    <div class="blog-image">
                        <a href="blog-details.html"><?= Html::img(Url::to('@web/img/news-1.jpg', ['alt'=>'news']))?></a>
                    </div>
                    <div class="blog-content">
                        <h4 class="blog-title"><a href="blog-details.html">Nulla eget urna at tortor  turpi feugiat tristique in sit.</a></h4>
                        <div class="blog-author d-flex align-items-center">
                            <div class="author-image">
                                <?= Html::img(Url::to('@web/img/author-1.jpg', ['alt'=>'author']))?>
                            </div>
                            <div class="author-content media-body">
                                <h6 class="sub-title">Posted by</h6>
                                <p class="text">Isabela Moreira</p>
                            </div>
                        </div>
                    </div>
                </div> <!-- single blog -->
            </div>
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="single-blog mt-30 wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.7s">
                    <div class="blog-image">
                        <a href="blog-details.html"><?= Html::img(Url::to('@web/img/news-2.jpg', ['alt'=>'news']))?></a>
                    </div>
                    <div class="blog-content">
                        <h4 class="blog-title"><a href="blog-details.html">Nulla eget urna at tortor  turpi feugiat tristique in sit.</a></h4>
                        <div class="blog-author d-flex align-items-center">
                            <div class="author-image">
                                <?= Html::img(Url::to('@web/img/author-3.jpg', ['alt'=>'author']))?>
                            </div>
                            <div class="author-content media-body">
                                <h6 class="sub-title">Posted by</h6>
                                <p class="text">Elon Musk</p>
                            </div>
                        </div>
                    </div>
                </div> <!-- single blog -->
            </div>
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="single-blog mt-30 wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="1s">
                    <div class="blog-image">
                        <a href="blog-details.html"><?= Html::img(Url::to('@web/img/news-3.jpg', ['alt'=>'news']))?></a>
                    </div>
                    <div class="blog-content">
                        <h4 class="blog-title"><a href="blog-details.html">Nulla eget urna at tortor  turpi feugiat tristique in sit.</a></h4>
                        <div class="blog-author d-flex align-items-center">
                            <div class="author-image">
                                <?= Html::img(Url::to('@web/img/author-3.jpg', ['alt'=>'author']))?>
                            </div>
                            <div class="author-content media-body">
                                <h6 class="sub-title">Posted by</h6>
                                <p class="text">Fiona</p>
                            </div>
                        </div>
                    </div>
                </div> <!-- single blog -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== BLOG PART ENDS ======-->

<!--====== CONTACT PART START ======-->

<section id="contact" class="contact-area pt-120 pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="section-title text-center pb-20 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                    <h6 class="sub-title">Our Contact</h6>
                    <h4 class="title">Get In <span>Touch.</span></h4>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
        <div class="contact-info pt-30">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-contact-info contact-color-1 mt-30 d-flex  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                        <div class="contact-info-icon">
                            <i class="lni-map-marker"></i>
                        </div>
                        <div class="contact-info-content media-body">
                            <p class="text">21 King Street, Melbourne <br> Victoria, 1202 Australia.</p>
                        </div>
                    </div> <!-- single contact info -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-contact-info contact-color-2 mt-30 d-flex  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                        <div class="contact-info-icon">
                            <i class="lni-envelope"></i>
                        </div>
                        <div class="contact-info-content media-body">
                            <p class="text">hello@uideck.com</p>
                            <p class="text">support@uideck.com</p>
                        </div>
                    </div> <!-- single contact info -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-contact-info contact-color-3 mt-30 d-flex  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.9s">
                        <div class="contact-info-icon">
                            <i class="lni-phone"></i>
                        </div>
                        <div class="contact-info-content media-body">
                            <p class="text">+99 000 1111 555</p>
                            <p class="text">+88 999 5555 444</p>
                        </div>
                    </div> <!-- single contact info -->
                </div>
            </div> <!-- row -->
        </div> <!-- contact info -->
        <div class="row">
            <div class="col-lg-12">
                <div class="contact-wrapper-form pt-115  wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.5s">
                    <h4 class="contact-title pb-10"><i class="lni-envelope"></i> Leave <span>A Message.</span></h4>

                    <form id="contact-form" action="assets/contact.php" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="contact-form mt-45">
                                    <label>Enter Your Name</label>
                                    <input type="text" name="name" placeholder="Full Name">
                                </div> <!-- contact-form -->
                            </div>
                            <div class="col-md-6">
                                <div class="contact-form mt-45">
                                    <label>Enter Your Email</label>
                                    <input type="email" name="email" placeholder="Email">
                                </div> <!-- contact-form -->
                            </div>
                            <div class="col-md-12">
                                <div class="contact-form mt-45">
                                    <label>Your Message</label>
                                    <textarea name="message" placeholder="Enter your message..."></textarea>
                                </div> <!-- contact-form -->
                            </div>
                            <p class="form-message"></p>
                            <div class="col-md-12">
                                <div class="contact-form mt-45">
                                    <button type="submit" class="main-btn">Send Now</button>
                                </div> <!-- contact-form -->
                            </div>
                        </div> <!-- row -->
                    </form>
                </div> <!-- contact wrapper form -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== CONTACT PART ENDS ======-->
