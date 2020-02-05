<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

use yii\helpers\Url;
$this->title=$model->title;
?>

<section class="pt-140 pb-80">
    <div class="container">
        <h1 class="mt-4"><?= $model->title; ?></h1>
        <div class="pt-20 pb-40">
        </div>
        <?= $model->body ?>

    </div>

</section>
