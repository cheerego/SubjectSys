<?php
/**
 * Created by PhpStorm.
 * User: placeless
 * Date: 16/2/21
 * Time: 下午7:26
 */
use yii\widgets\ListView;
use yii\data\ActiveDataProvider;
$this->params['breadcrumbs'][]=$_SESSION['yii']['name'];
$this->params['breadcrumbs'][]='查看关系';
echo ListView::widget([
    'dataProvider' => $dataProvider,
    'itemView' => 'relativeitem',
]);