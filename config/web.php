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
            'cookieValidationKey' => 'yLvvWirky1CPz3_wFq9BuUq9lRKqR4NK',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        // 'user' => [
        //     'identityClass' => 'app\models\User',
        //     'enableAutoLogin' => true,
        // ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            // 'useFileTransport' => true,
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'rcentral517.webserversystems.com',
                'username' => 'developers@particles.co.ke',
                'password' => 'khk/1244/06',
                'port' => '465',
                'encryption' => 'ssl',
            ],
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
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],

        'assetManager' => [
            'bundles' => [
                'dmstr\web\AdminLteAsset' => [
                    'skin' => 'skin-black-light',
                ],
            ],
        ],

        'view' => [
            'theme' => [
                'pathMap' => [
                    '@dektrium/user/views' => '@app/views/user'
                ],
            ],
        ],
    ],
    'params' => $params,

    'modules' => [
        'user' => [
            'class' => 'dektrium\user\Module',
            'enableFlashMessages' => false,
            'admins' => ['admin', 'henryohanga'],
            'mailer' => [
                'sender' => ['developers@particles.co.ke' => 'My App Developer'],
            ],

            'controllerMap' => [
                'security' => 'app\controllers\user\SecurityController',
                'registration' => [
                    'class' => 'app\controllers\user\RegistrationController',
                    'on ' . \dektrium\user\controllers\RegistrationController::EVENT_AFTER_REGISTER => function ($e) {
                        Yii::$app->response->redirect(array('/user/security/login'))->send();
                        Yii::$app->end();
                    },

                    'on ' . \dektrium\user\controllers\RegistrationController::EVENT_AFTER_RESEND => function ($e) {
                        Yii::$app->response->redirect(array('/user/security/login'))->send();
                        Yii::$app->end();
                    } 
                ],
                'recovery' => [
                    'class' => 'app\controllers\user\RecoveryController',
                    'on ' . \dektrium\user\controllers\RecoveryController::EVENT_AFTER_RESET => function ($e) {
                        Yii::$app->response->redirect(array('/site/index'))->send();
                        Yii::$app->end();
                    },

                    'on ' . \dektrium\user\controllers\RecoveryController::EVENT_AFTER_REQUEST => function ($e) {
                        Yii::$app->response->redirect(array('/user/security/login'))->send();
                        Yii::$app->end();
                    },
                ],
            ],
        ],

        'rbac' => [
            'class' => 'dektrium\rbac\RbacWebModule',
        ],
    ],
    
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
