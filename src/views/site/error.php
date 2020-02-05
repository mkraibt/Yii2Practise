<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;

preg_match('#\((.*?)\)#', $name, $match);
$code = substr($match[1], 1);
$msg = strtolower((trim($name,'(',true)));
?>

<section class="pt-120 pb-120">
    <div class="container">
        <?php
        if($code==404)
        {
            echo '<img src="https://www.boostability.com/wp-content/uploads/2012/10/BOOST_BLOG_IMAGE_RB_SET_10_404_PAGE_1200x628px_v1_3.jpg">';
        }elseif($code==403){
            echo '<img src="https://cdn.dribbble.com/users/761395/screenshots/6245146/error_403.jpg">';
        }else{
            echo '<img src="https://colorlib.com/wp/wp-content/uploads/sites/2/404-error-template-4.png">';
        }?>
        <?php echo $msg;?>
    </div>
</section>
