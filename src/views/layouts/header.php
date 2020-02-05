<?php

use yii\helpers\Html;
use yii\helpers\Url;
?>
<!--====== PRELOADER PART START ======-->

<div class="preloader">
    <div class="loader">
        <div class="ytp-spinner">
            <div class="ytp-spinner-container">
                <div class="ytp-spinner-rotator">
                    <div class="ytp-spinner-left">
                        <div class="ytp-spinner-circle"></div>
                    </div>
                    <div class="ytp-spinner-right">
                        <div class="ytp-spinner-circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--====== PRELOADER PART ENDS ======-->

<!--====== HEADER PART START ======-->

<header class="header-area">
    <div class="navbar-area headroom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="index.html">
                            <?=Html::img(Url::to('@web/img/logo.png'), ['alt'=>'Logo'])?>

                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                            <ul id="nav" class="navbar-nav m-auto">
                                <li class="nav-item ">
                                    <?= Html::a('Home', ['/site/index'])?>
                                </li>
                                <li class="nav-item">
                                    <a href="index.html/#portfolio">Portfolio</a>
                                </li>
                                <li class="nav-item">
                                    <?= Html::a('Blogs', ['/site/blogs'])?>
                                </li>
                                <li class="nav-item">
                                    <?= Html::a('Contact', ['/site/contact'])?>
                                </li>
                                <?php
                                if(Yii::$app->user->getIsGuest())
                                {?>
                                    <li class="nav-item">
                                        <?php
                                        echo Html::a('Login', ['/site/login']);
                                        ?>
                                    </li>
                                    <li class="nav-item">
                                        <?php
                                        echo Html::a('Signup', ['/site/signup']);
                                        ?>
                                    </li>
                                <?php
                                }
                                else
                                {?>
                                    <li class="nav-item" class="dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                           <?=Yii::$app->user->identity->username?>
                                        </a>
                                        <div class="dropdown-menu pl-10 pr-10" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="<?=Url::toRoute(['admin/index'])?>">Dashboard</a>
                                            <?= Html::a('Change Password', ['/admin/changepassword'], ['class'=>'dropdown-item'])?>
                                            <div class="dropdown-divider"></div>
                                            <?php
                                            echo Html::beginForm(['site/logout'], 'post');
                                            echo Html::submitButton(
                                                'Logout', ['class'=>'nav-item logout-btn']);
                                            echo Html::endForm();
                                            ?>
                                        </div>
                                    </li>
                                <?php
                                }
                                ?>
                            </ul>
                        </div> <!-- navbar collapse -->

                        <div class="navbar-btn d-none d-sm-inline-block">
                            <a class="main-btn" data-scroll-nav="0" href="#pricing">Download</a>
                        </div>
                    </nav> <!-- navbar -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- navbar area -->
</header>