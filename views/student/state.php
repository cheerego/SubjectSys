<?php
/**
 * Created by PhpStorm.
 * User: placeless
 * Date: 16/2/11
 * Time: 下午3:31
 */
$this->params['breadcrumbs'][] = '功能';
$this->params['breadcrumbs'][] = '选题状态';
?>
<?= $isselect != 1 ? $ispusher != 1 ? "aaa" : '<div id="myAlert" class="alert alert-success">已经提交,请联系老师!</div>' : '<div id="myAlert" class="alert alert-success">提交成功,请完成接下来的任务!</div>';

?>