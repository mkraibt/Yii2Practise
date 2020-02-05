<?php

namespace app\controllers;



use app\models\User;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use app\models\Blogs;
class BlogController extends Controller
{

    public function actionBlog($slug)
    {
        //$userid=Yii::$app->user->identity->id;
        $model = Blogs::findOne(['slug' => $slug, 'status'=> 1]);
        return $this->render('viewblog', ['model' => $model]);
    }

    public function actionAuthor($id)
    {
        $user = User::findOne(['id'=>$id]);
        return $this->render('author',['user'=>$user]);
    }
}