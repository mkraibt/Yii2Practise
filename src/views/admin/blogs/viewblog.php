<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

use yii\helpers\Url;
use yii\widgets\DetailView;
$this->title='Viewing - '.$model->title;
?>

<section class="pt-140 pb-0">
    <div class="d-flex" id="wrapper">
    <?=$this->render('../partial/adminmenu')?>
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <button class="btn btn-success" id="menu-toggle"><i class="fa fa-arrow-circle-o-right"></i> </button>
            <div class="container-fluid ">
                <div class="container">
                    <div class="pt-20 pb-40">
                        <a class="btn btn-default pull-right" href="<?=Url::to('newblog')?>">Add New Page</a>
                        <a class="btn btn-default pull-right" href="<?=Url::to(['updateblog', 'id'=> $model->id])?>">Edit</a>
                        <a class="btn btn-default pull-right" href="<?=Url::to(['blogs'])?>">All Pages</a>
                        <a class="btn btn-default pull-right" href="<?=Url::to(['deleteblog', 'id'=> $model->id])?>">Delete</a>
                    </div>
                    <?php
                    /***********DETAIL VIEW WIDGET EXAMPLE**************/
                    echo DetailView::widget([
                            'model' => $model,
                            'attributes' => [
                                    'title',
                                    'body',
                                    [
                                        'attribute' => 'created_at',
                                        'format' => ['date','d-M-Y']
                                    ]
                            ]
                    ])
                    ?>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
</section>
