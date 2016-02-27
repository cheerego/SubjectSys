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
            <a class="btn btn-danger pull-right" style="margin-left: 1%" href="<?=\yii\helpers\Url::toRoute(['index/deleterelative','stuid'=>$student->id])?>">删除关系</a>
        </td>
    </tr>
    </tbody>
</table>

