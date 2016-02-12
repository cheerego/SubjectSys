<?php

namespace app\modules\su\controllers;

use yii\helpers\Url;
use yii\web\Controller;

class IndexController extends Controller
{
    public $layout = 'sulayout';

    public function beforeAction($action)
    {
        $session = \Yii::$app->session;
        $session->open();
//        if ($session['yii'][]) {
//        }
        return parent::beforeAction($action); // TODO: Change the autogenerated stub
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionLogin()
    {

        return $this->render('login');
    }

    public function actionTeachercurd()
    {
        return $this->redirect(Url::toRoute('teachercurd/index', true));
    }
}
