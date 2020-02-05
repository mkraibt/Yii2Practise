<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

use yii\web\View;
use yii\helpers\Url;
use yii\helpers\Html;
?>

<!-- Sidebar -->
<div class="bg-light" id="sidebar-wrapper">
    <div class="sidebar-heading"><h6>Admin Menu</h6></div>
    <div class="list-group list-group-flush">
        <?php
        echo Html::a('Pages', ['/admin/pages'],['class'=>'list-group-item list-group-item-action bg-light']);
        echo Html::a('Blogs', ['/admin/blogs'], ['class'=>'list-group-item list-group-item-action bg-light']);
        echo Html::a('Pjax', ['/admin/pjax'], ['class'=>'list-group-item list-group-item-action bg-light']);
        ?>
    </div>
</div>
<!-- /#sidebar-wrapper -->


<?php
$this->registerJs('
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });',
    View::POS_READY,
    'my-button-handle'
);?>