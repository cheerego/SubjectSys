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
$this->params['breadcrumbs'][] = '功能';
$this->params['breadcrumbs'][] = '编辑选题';
?>
<div class="student-subject">
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'title')->textInput() ?>
    <?= $form->field($model, 'content')->textarea(['id' => 'editor']) ?>
    <input type="hidden" name="html">
    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        <a class="btn btn-danger pull-right" href="https://en.wikipedia.org/wiki/Markdown#Example" target="_self">Markdown语法介绍</a>
    </div>
    <?php ActiveForm::end(); ?>

</div><!-- student-subject -->
<script !src="">
    var ele_textarea = document.getElementById('editor');
    //实例化Mditor
    var editor = new mditor(ele_textarea);
    $('button[type=submit]').click(function () {
        var html = editor.getHtml();
        $('input[name=html]').val(html);
        return true;
    });

</script>