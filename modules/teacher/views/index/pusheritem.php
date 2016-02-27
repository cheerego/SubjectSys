<?php
/**
 * Created by PhpStorm.
 * User: placeless
 * Date: 16/2/21
 * Time: 下午7:16
 */

$student = $model->student;
?>
<table class="table table-hover">
    <thead>
    <tr>
        <th>学号</th>
        <th>姓名</th>
        <th>QQ</th>
        <th>电话</th>
        <th class="pull-right">操作</th>
    </tr>

    </thead>
    <tbody>
    <tr>
        <td><?= $student->num ?></td>
        <td><?= $student->name ?></td>
        <td><?= empty($student->qq)?"未填写":$student->qq ?></td>
        <td><?= empty($student->phone)?"未填写":$student->phone ?></td>
        <td>
            <a class="btn btn-danger pull-right" style="margin-left: 1%" href="<?=\yii\helpers\Url::toRoute(['index/refuse','stuid'=>$student->id,'pusherid'=>$model->id])?>">残忍拒绝</a>
            <a class="btn btn-success pull-right" href="<?=\yii\helpers\Url::toRoute(['index/receive','stuid'=>$student->id,'pusherid'=>$model->id])?>">不情愿答应</a>
        </td>
    </tr>
    </tbody>
</table>

