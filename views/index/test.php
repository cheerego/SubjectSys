<?php
/**
 * Created by PhpStorm.
 * User: placeless
 * Date: 16/1/27
 * Time: 下午3:45
 */

if( Yii::$app->getSession()->hasFlash('success') ) {
    echo \yii\bootstrap\Alert::widget([
        'options' => [
            'class' => 'alert-success', //这里是提示框的class
        ],
        'body' => Yii::$app->getSession()->getFlash('success'), //消息体
    ]);
}