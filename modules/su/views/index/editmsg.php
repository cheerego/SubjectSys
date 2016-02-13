<?php
/**
 * Created by PhpStorm.
 * User: placeless
 * Date: 16/2/1
 * Time: 下午3:38
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Subject */
/* @var $form ActiveForm */
$a = Yii::getAlias('@web') . "/assets/editor/mditor.js";
echo Html::jsFile($a);
?>
<div class="student-subject">
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'content')->textarea(['id' => 'editor']) ?>
    <div style="visibility: hidden">
    <?= $form->field($model, 'html')->hiddenInput(['id'=>'html']) ?>
    </div>
    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div><!-- student-subject -->
<script !src="">
    var ele_textarea = document.getElementById('editor');
    //实例化Mditor
    var editor = new mditor(ele_textarea);
    $('button[type=submit]').click(function () {
        var html = editor.getHtml();
        $('#html').val(html);
        return true;
    });

</script>