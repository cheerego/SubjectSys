<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    $session = Yii::$app->session;
    $session->open();
    NavBar::begin([
        'brandLabel' => 'Selecting Subjects System',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            !isset($_SESSION['yii']['islogin']) ?
                ['label' => 'Home', 'url' => ['/index/index']] :
                ['label' => 'Edit', 'url' => ['/student/index']],
            ['label' => 'About', 'url' => ['/index/about']],
            !isset($_SESSION['yii']['islogin']) ?
                ['label' => 'Login', 'url' => ['/index/login']] :
                [
                    'label' => 'Logout (' . $_SESSION['yii']['name'] . ')',
                    'url' => ['/index/logout'],
//                    'linkOptions' => ['data-method' => 'post']
                ],
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <div style="margin-top: 5%;padding: 1px">
            <div style="float: left;width: 25%">
                <div class="list-group">
                    <a href="<?= Url::toRoute('student/msg')?>" target="_self" class="list-group-item active">
                        <h4 class="list-group-item-heading">
                            功能
                        </h4>
                    </a>
                    <a href="<?= Url::toRoute('student/person')?>" target="_self" class="list-group-item">
                        <h4 class="list-group-item-heading">
                            完善信息
                        </h4>
                        <p class="list-group-item-text">
                            完善个人信息,姓名,QQ,联系方式等
                        </p>
                    </a>
                    <a href="<?= Url::toRoute('student/chooseteacher')?>" target="_self" class="list-group-item">
                        <h4 class="list-group-item-heading">
                            选择老师
                        </h4>
                        <p class="list-group-item-text">
                            选择毕业设计的指导老师
                        </p>
                    </a>
                    <a href="<?= Url::toRoute('student/subject')?>" target="_self" class="list-group-item">
                        <h4 class="list-group-item-heading">
                            毕业设计选题
                        </h4>
                        <p class="list-group-item-text">
                            完善毕业设计选题和功能描述
                        </p>
                    </a>
                    <a href="<?= Url::toRoute('student/state')?>" target="_self" class="list-group-item">
                        <h4 class="list-group-item-heading">
                            选题状态
                        </h4>
                        <p class="list-group-item-text">
                            选题是否合格状态
                        </p>
                    </a>
                </div>
            </div>

            <div class="right" style="float: right;width: 75%;height: 500px;padding: 10px">
                <?= Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ]) ?>
                <?= $content?>
            </div>

        </div>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
