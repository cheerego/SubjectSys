<?php
/**
 * Created by PhpStorm.
 * User: placeless
 * Date: 16/2/12
 * Time: 下午8:01
 */
?>
<?php
use yii\widgets\ActiveForm;

$form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

<?= $form->field($model, 'excel')->fileInput() ?>
<?= $form->field($model, 'delete')->checkbox() ?>
<?=\yii\helpers\Html::submitButton('Submit',['class'=>'btn btn-success'])?>

<?php ActiveForm::end(); ?>

