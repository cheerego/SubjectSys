<?php
/**
 * Created by PhpStorm.
 * User: placeless
 * Date: 16/1/27
 * Time: 下午2:01
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Student */
/* @var $form ActiveForm */
$this->title = "Student login";
?>
<div class="index-login" style="margin-top: 5%">
    <h1><?= Html::encode($this->title) ?></h1>
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'num')->label('学号')->textInput() ?>
    <?= $form->field($model, 'pwd')->label('密码')->passwordInput() ?>
    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div><!-- index-login -->
