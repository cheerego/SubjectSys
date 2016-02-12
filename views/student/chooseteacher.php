<?php
/**
 * Created by PhpStorm.
 * User: placeless
 * Date: 16/2/1
 * Time: 下午3:38
 */
use yii\helpers\Url;

$this->params['breadcrumbs'][] = '功能';
$this->params['breadcrumbs'][] = '选择老师';

?>
<?= $isselect != 1 ?
    $ispusher != 1 ?
        "<form action='" . Url::toRoute('student/chooseteacher', true) . "' method='post'>" .
        "<input type='hidden' name='_csrf' value='" . Yii::$app->request->getCsrfToken() . "'>" .
        \yii\helpers\Html::dropDownList('id', null, $teacherlist, ['class' => 'form-control']) .
        \yii\helpers\Html::submitButton('Submit', ['class' => 'btn btn-primary', 'style' => 'margin-top:5px;']) .
        "</form>"
        : '<div id="myAlert" class="alert alert-success">已经提交,请联系老师!</div>'
        : '<div id="myAlert" class="alert alert-success">提交成功,请完成接下来的任务!</div>';

?>

