<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

use yii\widgets\ActiveForm;
use yii\helpers\Html;

$this->title="Change Password";
?>

<section class="pt-140 pb-0">
    <div class="d-flex" id="wrapper">
        <?=$this->render('partial/adminmenu')?>
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <button class="btn btn-primary" id="menu-toggle"><i class="fa fa-arrow-circle-o-right"></i> </button>
            <div class="container-fluid ">
                <div class="container">
                    <?php $form = ActiveForm::begin();?>
                    <?=$form->field($model, 'oldPassword')->passwordInput(['class'=>'form-control']);?>
                    <?=$form->field($model, 'newPassword')->passwordInput();?>
                    <?= Html::submitButton('Update', ['class' => 'btn btn-primary', 'name' => 'update-password']) ?>
                    <?php ActiveForm::end();?>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
</section>
