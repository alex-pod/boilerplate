<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
	'language' => 'ru',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'cxI-Tc_bfe_N6QeclsfXaMxh9609bj4z',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
	        'loginUrl' => ['/'],
        ],
	    'authManager' => [
//	        'class' => 'yii\rbac\PhpManager',
	        'class' => 'elisdn\hybrid\AuthManager',
	        'modelClass' => 'app\models\User',
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
        'assetManager' => [
	        'bundles' => [
		        'yii\web\JqueryAsset' => [
			        'sourcePath' => null, 'js' => [],
		        ],
		        'yii\bootstrap\BootstrapAsset' => [
			        'sourcePath' => null, 'css' => [],
		        ],
		        'yii\bootstrap\BootstrapPluginAsset' => [
			        'sourcePath' => null, 'js' => [],
		        ],
		        'yii\jui\JuiAsset' => [
			        'sourcePath' => null, 'css' => [], 'js' => [],
		        ],
		        '\rmrevin\yii\fontawesome\AssetBundle' => [
			        'sourcePath' => null, 'css' => [],
		        ],
	        ],
        ],
        'db' => $db,
        /*
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        */
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
