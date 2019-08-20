<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'mwaura',
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
        'db' => $db,
        
        'urlManager' => [
            'class' => 'yii\web\UrlManager',
            // Disable index.php
            'showScriptName' => false,
            // Disable r= routes
            'enablePrettyUrl' => true,
            'rules' => [
               '<controller:\w+>/<id:\d+>' => '<controller>/view',
               '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
               '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
                ['class' => 'yii\rest\UrlRule', 'controller' => 'users'],
            ],
        ],
        
    ],
    'params' => $params,
];



if (IS_GAE) {
    // Use tmp directory for runtime files
    $config['runtimePath'] = sys_get_temp_dir();
    // Use Google Storage for assets
    $config['components']['assetManager'] = [
        'class' => 'Oitmain\Yii2\Google\GoogleStorageAssetManager',
        'googleStorageBucket' => 'dauntless-drive-249913.appspot.com',
        'baseUrl' => 'https://storage.googleapis.com/dauntless-drive-249913.appspot.com',
        'basePath' => sys_get_temp_dir(),
    ];
    // Get client IP from proxy
    $config['components']['request']['trustedHosts'] = [
        'any' => ['X-Forwarded-For']
    ];
}


if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1', '8.8.8.8'],
    ];
}

return $config;
