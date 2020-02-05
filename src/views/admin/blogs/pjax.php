<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\Blogs */

$this->title = 'Add New Article ';

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Pjax;

?>

<section class="pt-140 pb-0">
    <div class="d-flex" id="wrapper">
        <?=$this->render('../partial/adminmenu')?>
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <button class="btn btn-primary" id="menu-toggle"><i class="fa fa-arrow-circle-o-right"></i> </button>
            <div class="container-fluid ">
                <div class="container">

                    <?php Pjax::begin()?>
                    <?php echo Html::beginForm()?>
                    <?php echo Html::input('text', 'message', Yii::$app->request->post('string'),
                    ['class'=>'form-control'])?>
                    <?php echo Html::submitButton('submit', ['class'=>'btn btn-primary', 'name'=>'send-message'])?>
                    <?php echo Html::endForm()?>
                    <?php Pjax::end()?>
                    <?php
                    if(!empty($response))
                    {
                        echo '<div class="alert alert-success">'.$response.'</div>';
                    }
                    ?>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
</section>
