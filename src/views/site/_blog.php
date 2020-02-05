<?php
use yii\helpers\Url;
use yii\helpers\Html;
use app\widgets\SmallBody;
if($model->image=='')
{
    $img = '@web/img/home-office-336373_1280.jpg';
}
else{
    $img = '@web/uploads/'.$model->image;
}
?>

<div class="pt-20 pb-20">
    <a href="<?=Url::toRoute(['/blog/blog', 'slug' => $model->slug])?>">
        <h4 class="blog-title"><?=$model->title;?></h4>
    </a>
    <?=Html::img($img,['class'=>'img-responsive'])?>
    <p><?=SmallBody::widget(['body'=>$model->body,'count'=>60])?></p>
    <p class="small"><?=$model->created_at;?> | Posted by: <a href="<?= Url::toRoute(['blog/author', 'id'=>$model->created_by])?>"> <?=$model->author->name;?></a></p>

</div>
