<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = "Pages"

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
                        <a class="btn btn-default" href="<?=Url::to('newpage')?>">Add Article</a>
                    </div>
                    <table class="table table-bordered">
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
                        <?php
                        $i=1;
                        foreach($model as $page)
                        {
                            ?>
                            <tr class="pricing-price">
                                <th scope="row"><?= $i++ ;?></th>
                                <td><?=$page->title;?></td>
                                <td><?=$page->created_by;?></td>
                                <td><?=$page->created_at;?></td>
                                <td><a href="<?=Url::to(['viewpage','id'=>$page->id]);?>" class="btn btn-cst">view</a>
                                    <a href="<?=Url::to(['updatepage','id'=>$page->id]);?>" class="btn btn-cst">Edit</a>
                                    <a href="<?=Url::to(['deletepage','id'=>$page->id]);?>" class="btn btn-cst">Delete</a></td>
                            </tr>
                            <?php
                        }?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
</section>
