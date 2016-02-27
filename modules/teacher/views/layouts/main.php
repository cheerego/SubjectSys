<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

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
    $items = array();
    switch ($session['yii']['type']) {
        case 'xs':
            $items = [
                ['label' => 'Edit', 'url' => ['/student/index']],
                ['label' => 'about', 'url' => ['/index/about']],
                [
                    'label' => 'Logout (' . $_SESSION['yii']['name'] . ')',
                    'url' => ['/index/logout'],
//                    'linkOptions' => ['data-method' => 'post']
                ],
            ];
            break;
        case 'tc':
            $items = [
                ['label' => 'Edit', 'url' => ['/index/index']],
                ['label' => 'about', 'url' => ['/index/about']],
                [
                    'label' => 'Logout (' . $_SESSION['yii']['name'] . ')',
                    'url' => ['/index/logout'],
//                    'linkOptions' => ['data-method' => 'post']
                ],
            ];
            break;
        case 'su':
            $items = [
                ['label' => 'Edit', 'url' => ['/su/index/index']],
                ['label' => 'about', 'url' => ['/index/about']],
                [
                    'label' => 'Logout (' . $_SESSION['yii']['name'] . ')',
                    'url' => ['/su/index/logout'],
//                    'linkOptions' => ['data-method' => 'post']
                ],
            ];
            break;
        default:
            $items = [
                ['label' => 'Home', 'url' => ['/index/index']],
                ['label' => 'about', 'url' => ['/index/about']],
                ['label' => 'login', 'url' => ['/index/login']],
            ];
            break;
    }

//    echo Nav::widget([
//        'options' => ['class' => 'navbar-nav navbar-right'],
//        'items' =>$items
//    ]);
//    NavBar::end();
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
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>

        <?= $content ?>
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
