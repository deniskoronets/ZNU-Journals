<?php

class PagesController extends Controller
{
    public function filters()
	{
		return array(
			'accessControl',
		);
	}

	public function accessRules()
	{
		return array(
			array('allow',
				'actions' => array('index','view'),
				'users' => array('*'),
			),
			array('allow',
				'actions' => array('create','update'),
				'users' => array('@'),
			),
			array('allow',
				'actions' => array('admin','delete'),
				'users' => array('admin'),
			),
			array('deny',
				'users' => array('*'),
			),
		);
	}

    /**
      * Просмотр содержимого статической страницы журнада
      * Генерация с помощью TWIG
      * @param int $pageId - ID страницы
      */
	public function actionView($pageId)
	{
		$page = $this->loadModel($pageId);

        $this->breadcrumbs = array(
            'Журналы' => array('journals/index'),
            $page->journal->name => array('journals/view', 'journalId' => $page->journal->journal_id),
            $page->name,
        );

        $this->renderJournalTemplate($page->journal->theme, 'pages/view', array(
            'page'          => $page,
            'pageContent'   => $page->getContent(),
            'journalLink'   => $this->createUrl('journals/view', array('journalId' => $page->journal->journal_id)),
        ));
	}

	public function actionIndex($journalId)
	{
		$dataProvider=new CActiveDataProvider('StaticPages');

        $this->render('index', array(
			'dataProvider'=>$dataProvider,
		));
	}

	public function loadModel($id)
	{
		$model = StaticPages::model()->findByPk($id);
		if($model === null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='static-pages-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
