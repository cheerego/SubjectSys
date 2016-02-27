<?php
/**
 * Created by PhpStorm.
 * User: placeless
 * Date: 16/2/27
 * Time: 下午3:36
 */
use yii\helpers\Html;
?>

<?= $info ?"<h2>".$subject->title."</h2>" ."<hr>".$subject->html:
Html::a('该学生没有编写选题!','',['class'=>'alert alert-info visible-lg-block' ]);

?>
