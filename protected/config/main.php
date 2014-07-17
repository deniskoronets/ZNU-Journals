<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

Yii::setPathOfAlias('bootstrap', dirname(__FILE__) . '/../extensions/bootstrap');

return array(
	'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
	'name' => 'Журналы',

    // русификация фреймворка
    'sourceLanguage' => 'en_US',
    'language' => 'ru',
    'charset' => 'utf-8',

    // контроллер по умолчанию
    'defaultController' => 'journals',

	'preload' => array('log'),

	'import' => array(
		'application.models.*',
		'application.components.*',
        'application.helpers.*',
	),

    'theme' => 'bootstrap',

	'modules' => array(
		'gii' => array(
			'class'=>'system.gii.GiiModule',
			'password'=>'parol',

			'ipFilters'=>array('127.0.0.1','::1'),

            'generatorPaths'=>array(
                'bootstrap.gii',
            ),
		),

	),

	'components' => array(

        // Обработка изображений
        'image' => array(
            //'class' => 'application.extensions.image.CImageComponent',
            'class' => 'application.extensions.image.CImageComponent',
            'driver' => 'GD',

            // ImageMagick setup path
            //'params'=>array('directory'=>'/opt/local/bin'),
        ),

        // Twig
        'viewRenderer' => array(
            'class' => 'application.extensions.twig.ETwigViewRenderer',
            'fileExtension' => '.html',
            'options' => array(
                'autoescape' => true,

                // путь к темам журналов
                'path' => 'additional/journals_themes/',
            ),
            'extentions' => array(
                'My_Twig_Extension',
            ),
            'functions' => array(
                'Controller::createUrl',
            ),
        ),

        // Бутстрап тема
        'bootstrap' => array(
            'class' => 'bootstrap.components.Bootstrap',
        ),

		'user' => array(
			'allowAutoLogin' => true,
		),

        // uncomment the following to enable URLs in path-format
		'urlManager' => array(
			'urlFormat'=>'path',
			'rules' => array(
				'<controller:\w+>/<id:\d+>' => '<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
				'<controller:\w+>/<action:\w+>' => '<controller>/<action>',
			),
            'showScriptName' => false,
		),

		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=journals_system',
			'emulatePrepare' => true,
			'username' => 'some',
			'password' => 'some',
			'charset' => 'utf8',

            'enableProfiling' => true,
            'enableParamLogging' => true
        ),

		'errorHandler'=>array(
			'errorAction'=>'site/error',
		),

        '0log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
                array(
                    'class' => 'CWebLogRoute',
                    'categories' => 'system.db.CDbCommand',

                ),
            ),
        ),
	),

	'params' => array(
        // путь к статическим страницам журналов
        'staticPagesPath' => 'additional/static_pages/',

        // полный html путь к статьям
        'articlesPath'    => '/additional/articles/',
    ),
);