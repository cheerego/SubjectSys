<?php
/**
 * Created by PhpStorm.
 * User: placeless
 * Date: 16/2/21
 * Time: 下午7:16
 */

use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
$student= $model->student;
var_dump($student);
?>
<div class="post">
    <h2><?= Html::encode($model->id) ?></h2>

    <?= HtmlPurifier::process($model->teacher_id) ?>
    <?= HtmlPurifier::process($model->student_id) ?>
    <?= $student->name?>

</div>