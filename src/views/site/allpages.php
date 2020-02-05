<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>
<section class="pt-120 pb-120">
    <div class="container">
        <?php
        foreach ($model as $page) {
            ?>
            <div class="pt-20 pb-20">
                <h4 class="blog-title"><?=$page->title;?></h4>
                <p><?=$page->body;?></p>
                <p class="small"><?=$page->created_at;?></p>
            </div>
            <?php
        }?>
    </div>
</section>
