<?php

namespace app\controllers;



use app\models\User;
use Yii;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;
use yii\web\Controller;
use app\models\Pages;
use app\models\Blogs;
use yii\web\UploadedFile;

class AdminController extends Controller
{

    public $oldPassword;
    public  $newPassword;


    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@']
                    ]
                ]
            ]
        ];
    }

    public function actionIndex()
    {
        return $this->render('dashboard');
    }
    public function actionBlog()
    {
        return $this->render('dashboard');
    }

    /*************THIS IS PAGE SECTION**********************/

    public function actionPages()
    {
        $userid=Yii::$app->user->identity->id;
        $model = Pages::find()->where(['created_by'=>$userid])->all();
        return $this->render('pages/index', ['model'=>$model]);
    }
    public function actionNewpage()
    {
        $model = new Pages();
        if($model->load(Yii::$app->request->post()))
        {
            $model->created_by = yii::$app->user->identity->getId();
            if($model->save(false))
            {
                $this->redirect('pages');
            }
            else{
                return false;
            }
        }
        return $this->render('pages/addpage', ['model' => $model]);
    }

    public function actionViewpage($id)
    {
        $userid=Yii::$app->user->identity->id;
        $model = Pages::findOne(['id' => $id,'created_by' => $userid]);
        return $this->render('pages/viewpage', ['model' => $model]);
    }
    public function actionUpdatepage($id)
    {
        $userid=Yii::$app->user->identity->id;
        $model = Pages::findOne(['id' => $id, 'created_by' => $userid]);
        if($model->load(yii::$app->request->post()))
        {
            $model->created_by = yii::$app->user->identity->getId();
            if($model->save(false))
            {
                $this->redirect(['viewpage', 'id'=>$id]);
            }
            else{
                return false;
            }
        }
        return $this->render('pages/updatepage', ['model' => $model]);
    }

    public function actionDeletepage($id)
    {
        $userid=Yii::$app->user->identity->id;
       if(Pages::find()->where(['id'=>$id, 'created_by' => $userid])->exists())
       {
           $model = Pages::find()->where(['id'=>$id])->one();
           if($model->delete())
           {
               return $this->redirect(['pages']);
           }
           else{
               return false;
           }

       }
    }

    /**************************THIS IS BLOG SECTION**********************************/

    public function actionBlogs()
    {
        $userid=Yii::$app->user->identity->id;
        //$model = Blogs::find()->where(['created_by'=>$userid])->all();
        //***THIS IS USING GRID WIDGET****/

        $model = new ActiveDataProvider([
            'query' => Blogs::find()->where(['created_by'=>$userid]),
            'sort'=> ['defaultOrder' => ['created_at'=>SORT_DESC]],
            'pagination' => [
                'pageSize' => 20
            ]
        ]);

        return $this->render('blogs/index', ['model'=>$model]);
    }
    public function actionNewblog()
    {
        $model = new Blogs();
        if($model->load(Yii::$app->request->post()))
        {
            $model->created_by = yii::$app->user->identity->getId();
            $image  = UploadedFile::getInstances($model, 'image');
            foreach($image as $img)
            {
                $img->saveAs('uploads/images/'.$img->baseName.'.'.$img->extension);
            }

            $model->image = $img->baseName.'.'.$img->extension;
            if($model->save())
            {
                $this->redirect('blogs');
            }
            else{
                return "Error Occured when saving";
            }
        }
        return $this->render('blogs/addblog', ['model' => $model]);
    }

    public function actionViewblog($id)
    {
        $userid=Yii::$app->user->identity->id;
        $model = Blogs::findOne(['id' => $id,'created_by' => $userid]);
        return $this->render('blogs/viewblog', ['model' => $model]);
    }
    public function actionUpdateblog($id)
    {
        $userid=Yii::$app->user->identity->id;
        $model = Blogs::findOne(['id' => $id, 'created_by' => $userid]);
        if($model->load(yii::$app->request->post()))
        {
            $model->created_by = yii::$app->user->identity->getId();
            if($model->save(false))
            {
                $this->redirect(['viewblog', 'id'=>$id]);
            }
            else{
                return false;
            }
        }
        return $this->render('blogs/updateblog', ['model' => $model]);
    }

    public function actionDeleteblog($id)
    {
        $userid = Yii::$app->user->identity->id;
        if (Blogs::find()->where(['id' => $id, 'created_by' => $userid])->exists()) {
            $model = Blogs::find()->where(['id' => $id])->one();
            if ($model->delete()) {
                return $this->redirect(['blogs']);
            } else {
                return false;
            }

        }
    }
    /*****************PJAX Example************************/

    public function actionPjax()
    {
        $message = Yii::$app->request->post('message');
        $response = null;
        if(!is_null($message))
        {
            $response = 'Your Message is '.$message;
        }
        return $this->render('blogs/pjax',['response'=>$response]);
    }

    /*******************PASSWORD CHANGE SECTION*******************/

    public function actionChangepassword()
    {
        $model = User::find()->where(['id' => Yii::$app->user->getId()])->one();
        if($model->load(Yii::$app->request->post()))
        {
            if(Yii::$app->security->validatePassword($model->oldPassword, $model->password_hash))
            {
                $password = Yii::$app->security->generatePasswordHash($model->newPassword);
                $model->password_hash = $password;
                if($model->save())
                {
                    echo "Password Updated";
                }
                else{
                    echo "Error Updating Password";
                }
            }
            else{
                echo "Incorrect Old Password";
            }
        }
        return $this->render('changepassword',['model' => $model]);
    }
}