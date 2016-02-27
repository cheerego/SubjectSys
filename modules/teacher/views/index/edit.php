<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Teacher */
/* @var $form ActiveForm */
$this->params['breadcrumbs'][]=$_SESSION['yii']['name'];
$this->params['breadcrumbs'][]='个人信息';
?>

<div class="modules-teacher-view-edit">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'name') ?>
    <?= $form->field($model, 'num')->textInput(['readonly'=>true]) ?>
    <?= $form->field($model, 'pwd') ?>
    <?= $form->field($model, 'current')->textInput(['readonly'=>true]) ?>
    <?= $form->field($model, 'total') ?>
    <?= $form->field($model, 'phonenum') ?>
    <?= $form->field($model, 'qqgroup') ?>
    <?= $form->field($model, 'qq') ?>
    <?= $form->field($model, 'email') ?>

    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div><!-- modules-teacher-view-edit -->