<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Url;
use app\widgets\SmallBody;
use yii\widgets\ListView;

$this->title = "Blogs";
?>
<section class="pt-120 pb-120">
    <div class="container">
        <?php
        echo ListView::widget([
                'dataProvider' => $blogs,
                'itemView' => '_blog'
        ]);
           ?>
    </div>
</section>
