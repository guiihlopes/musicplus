<?php

$params = require(__DIR__ . '/params.php');
$db = require(__DIR__ . '/db.php');

use kartik\datecontrol\Module;

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'modules' => [
        'datecontrol' =>  [
            'class' => 'kartik\datecontrol\Module',
     
            // format settings for displaying each date attribute (ICU format example)
            'displaySettings' => [
                Module::FORMAT_DATE => 'php:d/m/Y',
                Module::FORMAT_TIME => 'hh:mm:ss a',
                Module::FORMAT_DATETIME => 'php:d/m/Y hh:mm:ss a', 
            ],
            
            // format settings for saving each date attribute (PHP format example)
            'saveSettings' => [
                Module::FORMAT_DATE => 'php:Y-m-d',
                Module::FORMAT_TIME => 'php:H:i:s',
                Module::FORMAT_DATETIME => 'php:Y-m-d H:i:s',
            ],
     
            // set your display timezone
            'displayTimezone' => 'America/Sao_Paulo',
            
            // automatically use kartik\widgets for each of the above formats
            'autoWidget' => true,
        ],
        'imagemanager' => [
            'class' => 'noam148\imagemanager\Module',
            'canUploadImage' => true,
            'canRemoveImage' => true,
            'deleteOriginalAfterEdit' => false // false: keep original image after edit. true: delete original image after edit
        ],
    ],
    'language' => 'pt-BR',
    'sourceLanguage' => 'pt-BR',
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'c7ToxFxX21iDoVhVB1pKcfTIybWze35l',
        ],
        'imagemanager' => [
            'class' => 'noam148\imagemanager\components\ImageManagerGetPath',
            //set media path (outside the web folder is possible)
            'mediaPath' => '/uploads',
            //path relative web folder. In case of multiple environments (frontend, backend) add more paths 
            'cachePath' =>  ['assets/images'],
            //use filename (seo friendly) for resized images else use a hash
            'useFilename' => true,
            //show full url (for example in case of a API)
            'absoluteUrl' => false,
            'databaseComponent' => 'db'
        ],
        'formatter' => [
            'class' => 'yii\i18n\Formatter',
            'dateFormat' => 'php:d/m/Y',
            'datetimeFormat' => 'php:d/m/Y H:i:s',
            'timeFormat' => 'php:H:i:s',
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
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
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
