<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\Blogs */

$this->title = 'Add New Article ';

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;
use kartik\file\FileInput;
use dosamigos\tinymce\TinyMce;
?>

<section class="pt-140 pb-0">
    <div class="d-flex" id="wrapper">
        <?=$this->render('../partial/adminmenu')?>
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <button class="btn btn-primary" id="menu-toggle"><i class="fa fa-arrow-circle-o-right"></i> </button>
            <div class="container-fluid ">
                <div class="container">


                    <h1 class="mt-4">Add New Blog</h1>
                    <div class="pt-20 pb-40">
                        <a class="btn btn-default pull-right" href="<?=Url::to('blogs')?>">Cancel</a>
                    </div>
                    <?php $form = ActiveForm::begin(['id'=>'new_blog', 'options'=> ['enctype'=>'multipart/form-data']])?>
                    <?=  $form->field($model, 'title')->textInput(['autofocus' => true])?>
                    <!----USING TINYMCE Extension--------->
                    <?= $form->field($model, 'body')->widget(TinyMce::className(), [
                        'options' => ['rows' => 6],
                        'language' => 'es',
                        'clientOptions' => [
                            'plugins' => [
                                "advlist autolink lists link charmap print preview anchor",
                                "searchreplace visualblocks code fullscreen",
                                "insertdatetime media table contextmenu paste"
                            ],
                            'toolbar' => "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
                        ]
                    ]);?>

                    <!----IMAGE UPDLOAD USING EXTENSION---->
                    <?= $form->field($model, 'image')->widget(FileInput::classname(), ['options' => ['accept' => 'image/*'],])?>
                    <?= $form->field($model, 'status')->checkbox([])?>
                    <div class="form-group">
                        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'blog-save']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>

                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
</section>
