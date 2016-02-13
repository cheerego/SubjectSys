<?php
/**
 * Created by PhpStorm.
 * User: placeless
 * Date: 16/2/11
 * Time: 下午11:46
 */
?>
<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Su */
/* @var $form ActiveForm */
?>
<div class="site-sulogin" style="margin-top: 5%">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username') ?>
    <?= $form->field($model, 'password')->passwordInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-sulogin -->