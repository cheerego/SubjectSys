<?php
/**
 * Created by PhpStorm.
 * User: placeless
 * Date: 16/2/1
 * Time: 下午3:37
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Student */
/* @var $form ActiveForm */
$this->params['breadcrumbs'][] = '功能';
$this->params['breadcrumbs'][] = '完善信息';
?>

<div class="student-person">
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'num')->textInput(['readonly'=>true]) ?>
    <?= $form->field($model, 'name')->textInput() ?>
    <?= $form->field($model, 'qq')->textInput() ?>
    <?= $form->field($model, 'phone')->textInput() ?>
    <?= $form->field($model, 'pwd')->textInput() ?>
    <div class="form-group">
        <?= Html::submitButton('Update', ['class' => 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div><!-- student-person -->