<?php
/**
 * Created by PhpStorm.
 * User: placeless
 * Date: 16/2/21
 * Time: 下午7:10
 */
use yii\widgets\ListView;
$this->params['breadcrumbs'][]=$_SESSION['yii']['name'];
$this->params['breadcrumbs'][]='查看请求';
echo ListView::widget([
    'dataProvider' => $dataProvider,
    'itemView' => 'pusheritem',
]);