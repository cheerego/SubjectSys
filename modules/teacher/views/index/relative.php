<?php
/**
 * Created by PhpStorm.
 * User: placeless
 * Date: 16/2/21
 * Time: 下午7:26
 */
use yii\widgets\ListView;
use yii\data\ActiveDataProvider;

echo ListView::widget([
    'dataProvider' => $dataProvider,
    'itemView' => '_post',
]);