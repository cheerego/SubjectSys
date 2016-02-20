<?php
/**
 * Created by PhpStorm.
 * User: placeless
 * Date: 16/2/20
 * Time: 下午1:56
 */
/* @var $this yii\web\View */
/* @var $model app\models\Teacher */
/* @var $form ActiveForm */
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
$this->title='Teacher Login'
?>
<div class="modules-teacher-view-login" style="margin-top: 5%">
    <h1><?=Html::encode($this->title)?></h1>
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'num') ?>
    <?= $form->field($model, 'pwd')->passwordInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div><!-- modules-teacher-view-login -->