<?php

namespace app\controllers;


use app\models\Blogs;
use Faker\Factory;
use Yii;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\SignupForm;
use app\models\Pages;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Signup action.
     *
     * @return Response
     */
    public function actionSignup()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post()) && $model->signup()) {
            return $this->goBack();
        }
        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    public  function actionAllpages()
    {
        $model=Pages::find()->all();
        return $this->render('allpages', [
            'model' => $model,
        ]);
    }

    public function actionBlogs()
    {
//        $blogs = Blogs::find()->select('id, slug, title, body, created_by, created_at')
//            ->where(['status'=> 1])
//            ->andWhere('created_by != 0 and created_by != ""')
//            ->orderBy('created_at DESC')
//            ->limit(20)
//            ->all();
        /*********LIST VIEW WIDGET************/
        $blogs = new ActiveDataProvider([
            'query'=>  Blogs::find()->where(['status'=> 1])->andWhere('created_by != 0 and created_by != ""'),
            'pagination' => [
                'pageSize' => 20
            ]
        ]);
        return $this->render('blogs', ['blogs'=>$blogs]);

    }

    public function actionFakeblog()
    {
        $faker = Factory::create();
        $blogs = new Blogs();

        for($i=0;$i<100;$i++)
        {
            $blogs->setIsNewRecord(true);
            $blogs->id = null;
            $blogs->created_by = rand(1,2);
            $blogs->title = $faker->word(random_int(5,10), true);
            $blogs->status = 1;
            $blogs->body = $faker->paragraph(random_int(10,20));
            $blogs->save();
        }
    }

    /*************ERROR HANDELING********/

}
