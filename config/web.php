<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'language' =>'zh-CN',
    'id' => 'basic',
    //设置默认路由
    //默认路由会导致 每个controller的 action 都是index
    'defaultRoute' => 'index',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    //添加了两个模块
    'modules' => [
        'teacher' => [
            'class' => 'app\modules\teacher\Teacher',
            'defaultRoute' => 'index',
        ],
        'su' => [
            'class' => 'app\modules\su\Su',
            'defaultRoute' => 'index',
        ],
    ],
    'components' => [
        //url美化组件  需要开启apache的rewrite模块  省略index.php
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
//            'suffix' => '.html',
            'rules' => [
//                '<controller:\w+>/<action:\w+>'=>'<controller>/<action>'
            ]
        ],
        //定义前端资源的位置
        'assetManager' => [
            'bundles' => [
                'yii\web\JqueryAsset' => [
                    'jsOptions' => [
                        'position' => \yii\web\View::POS_HEAD,
                    ]
                ],
                'yii\web\YiiAsset' => [
                    'jsOptions' => [
                        'position' => \yii\web\View::POS_HEAD,
                    ]
                ]
            ],
        ],

        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '123',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => require(__DIR__ . '/db.php'),
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;
