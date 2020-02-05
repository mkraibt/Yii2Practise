<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

use yii\helpers\Url;
?>

<section class="pt-140 pb-0">
    <div class="d-flex" id="wrapper">
    <?=$this->render('../partial/adminmenu')?>
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <button class="btn btn-success" id="menu-toggle"><i class="fa fa-arrow-circle-o-right"></i> </button>
            <div class="container-fluid ">
                <div class="container">

                    <h1 class="mt-4"><?= $model->title; ?></h1>
                    <div class="pt-20 pb-40">
                        <a class="btn btn-default pull-right" href="<?=Url::to('newpage')?>">Add New Page</a>
                        <a class="btn btn-default pull-right" href="<?=Url::to(['updatepage', 'id'=> $model->id])?>">Edit</a>
                        <a class="btn btn-default pull-right" href="<?=Url::to(['pages'])?>">All Pages</a>
                        <a class="btn btn-default pull-right" href="<?=Url::to(['deletepage', 'id'=> $model->id])?>">Delete</a>
                    </div>
                    <p><?= $model->body ?></p>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
</section>
