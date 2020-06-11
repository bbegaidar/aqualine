<?php
namespace frontend\controllers;

use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use common\models\Portfolio;

/**
 * Site controller
 */
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
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
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

    public function beforeAction($action)
    {                    
        $this->layout = false;
        $this->enableCsrfValidation = false;
        return parent::beforeAction($action);
    }

    function even($arr)
    {
        return $arr->category_id == '1';
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $portfolios = Portfolio::find()->andWhere(['is_active' => 1])->all();                
                
        return $this->render('index',[
            'portfolios' => $portfolios
        ]);
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionConsultation()
    {        
        return $this->render('open9');
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionServices($id)
    {                
        $id = (int)$id-1;
        if ($id > 1)
            return $this->render('open'.$id);
        else
            return $this->render('open');
    }


  


}
