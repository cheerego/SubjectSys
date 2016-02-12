<?php

namespace app\modules\teacher\controllers;

use yii\helpers\Url;
use yii\web\Controller;

class IndexController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}
