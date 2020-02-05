<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\Blogs */

$this->title = 'Add New Article ';

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;

?>

<section class="pt-140 pb-0">
    <div class="d-flex" id="wrapper">
        <?=$this->render('../partial/adminmenu')?>
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <button class="btn btn-primary" id="menu-toggle"><i class="fa fa-arrow-circle-o-right"></i> </button>
            <div class="container-fluid ">
                <div class="container">


                    <h1 class="mt-4">Edit Page</h1>
                    <div class="pt-20 pb-40">
                        <a class="btn btn-default pull-right" href="<?=Url::to('blogs')?>">Cancel</a>
                        <a class="btn btn-default pull-right" href="<?=Url::to('newblog')?>">Add New Blog</a>
                        <a class="btn btn-default pull-right" href="<?=Url::to(['deleteblog', 'id'=> $model->id])?>">Delete</a>
                    </div>
                    <?php $form = ActiveForm::begin(['id'=>'update_page'])?>

                    <?=  $form->field($model, 'title')->textInput(['autofocus' => true])?>
                    <?=  $form->field($model, 'body')->textarea(['rows' => 15])?>
                    <?= $form->field($model, 'status')->checkbox([])?>
                    <div class="form-group">
                        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'page-save']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>

                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
</section>
