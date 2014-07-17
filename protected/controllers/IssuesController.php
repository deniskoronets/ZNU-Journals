<?php

class IssuesController extends Controller
{
	public $layout='//layouts/column2';

	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

    // просмотр выпуска
	public function actionView($id)
	{
		$issue = $this->loadModel($id);

        $this->breadcrumbs = array(
            'Журналы' => array('index'),
            $issue->journal->name => array('journals/view', 'journalId' => $issue->journal->journal_id),
            $issue->name,
        );

        // пихаем внутрь рубрик статьи
        $rubricsModels = RubricsToIssues::model()->findAll(array(
            'condition' => 'issue_id = :issue_id',
            'params' => array(':issue_id' => $issue->issue_id),
        ));

        $rubrics = array();

        foreach ($rubricsModels as $rubric) {
            $rubrics[$rubric->rti_id] = array(
                'info' => $rubric,
                'articles' => array(),
            );
        }

        foreach ($issue->articles as $article) {
            $rubrics[$article->rubric_id]['articles'][] = $article;
        }

        $this->renderJournalTemplate($issue->journal->theme, 'issues/view', array(
            'issue'    => $issue,
            'rubrics'  => $rubrics,
          //  'articles' => $articles,
        ));
	}

	public function loadModel($id)
	{
		$model = Issues::model()->findByPk($id);

		if($model === null) {
			throw new CHttpException(404, 'The requested page does not exist.');
        }

		return $model;
	}
}
//asdasd /*