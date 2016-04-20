<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
             'suffix' => '.html',
            'showScriptName' => false,
            'rules' => [
                
            ],
        ]
    ],
];
