<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

Yii::setPathOfAlias('bootstrap', dirname(__FILE__).'/../extensions/bootstrap');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'My Web Application',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

    'theme'=>'bootstrap',

	'modules'=>array(
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'parol',

			'ipFilters'=>array('127.0.0.1','::1'),

            'generatorPaths'=>array(
                'bootstrap.gii',
            ),
		),

	),

	// application components
	'components'=>array(
        'viewRenderer'=>array(
            //'class'=>'ext.yiiext.renderers.twig.ETwigViewRenderer',
            'class' => 'application.extensions.twig.ETwigViewRenderer',
            'fileExtension' => '.html',
            'options' => array(
                'autoescape' => true,
            ),
            'extentions' => array(
                'My_Twig_Extension',
            ),
        ),

        'bootstrap' => array(
            'class' => 'bootstrap.components.Bootstrap',
        ),

		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		// uncomment the following to enable URLs in path-format
		/*
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		*/
		// uncomment the following to use a MySQL database

		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=journals_system',
			'emulatePrepare' => true,
			'username' => 'some',
			'password' => 'some',
			'charset' => 'utf8',

            'enableProfiling' => true,
            'enableParamLogging' => true
        ),



        /* 'log' => array(
          'class' => 'CLogRouter',
          'routes' => array(
             'db' => array(
             'class' => 'CWebLogRoute',
             'categories' => 'system.db.CDbCommand',
             'showInFireBug' => true, //Показывать в FireBug или внизу каждой страницы
           ),
           ),
		), */

		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),

        /* 'log'=>array(
            'class'=>'CLogRouter',
            'routes'=>array(
                array(
                    'class'=>'CWebLogRoute',
                    'categories' => 'system.db.CDbCommand',

                ),
            ),
        ), */
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
);