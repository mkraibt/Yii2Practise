<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;

$this->title = "All Blogs"

?>

<section class="pt-140 pb-0">
    <div class="d-flex" id="wrapper">
        <?=$this->render('../partial/adminmenu')?>
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <button class="btn btn-primary" id="menu-toggle"><i class="fa fa-arrow-circle-o-right"></i> </button>
            <div class="container-fluid ">
                <div class="container">
                    <h1 class="mt-4">All Pages</h1>
                    <div class="pt-20 pb-40">
                        <a class="btn btn-default" href="<?=Url::to('newblog')?>">Add Blog</a>
                    </div>

                    <!---USING WIDGET TO DISPLAY TABLE DATA with pagination ----->

                    <?php
                    echo GridView::Widget([
                            'dataProvider' => $model,
                            'columns' => [
                                    ['class' => 'yii\grid\SerialColumn'],
                                    'title',
                                    [
                                        'attribute'=>'created_at',
                                        'format' => ['date','d-m-y']
                                    ],
                                    'author.name',
                                    [
                                        'class' => 'yii\grid\ActionColumn',
                                        'urlCreator' => function($action, $model, $id)
                                        {
                                            if($action == 'view')
                                            {
                                                return Url::to(['viewblog', 'id'=>$id]);
                                            }
                                            if($action == 'update')
                                            {
                                                return Url::to(['updateblog', 'id'=>$id]);
                                            }
                                            if($action == 'delete')
                                            {
                                                return Url::to(['deleteblog', 'id'=>$id]);
                                            }
                                        }

                                    ]
                            ]
                    ])
                    ?>
                <!--    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Created By</th>
                            <th scope="col">Date</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php /*
                        $i=1;
                        foreach($model as $blog)
                        {
                            ?>
                            <tr class="pricing-price">
                                <th scope="row"><?= $i++ ;?></th>
                                <td><?=$blog->title;?></td>
                                <td><?=$blog->created_by;?></td>
                                <td><?=$blog->created_at;?></td>
                                <td><a href="<?=Url::to(['viewblog','id'=>$blog->id]);?>" class="btn btn-cst">view</a>
                                    <a href="<?=Url::to(['updateblog','id'=>$blog->id]);?>" class="btn btn-cst">Edit</a>
                                    <a href="<?=Url::to(['deleteblog','id'=>$blog->id]);?>" class="btn btn-cst">Delete</a></td>
                            </tr>
                            <?php
                        } */?>
                        </tbody>
                    </table---->

                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
</section>
