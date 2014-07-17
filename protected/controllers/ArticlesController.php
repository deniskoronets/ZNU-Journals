<?php

class ArticlesController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('send'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$article = $this->loadModel($id);

        $this->breadcrumbs = array(
            'Журналы' => array('index'),
            $article->issue->journal->name => array('journals/view', 'id' => $article->journal->journal_id),
            $article->issue->name => array('issues/view', 'id' => $article->issue->issue_id),
            $article->name,
        );

        $this->renderJournalTemplate($article->journal->theme, 'articles/view', array(
            'article' => $article,
        ));
	}

    public function actionSend($id)
    {
        $journal = Journals::model()->findByPk($id);

        $this->breadcrumbs = array(
            'Журналы' => array('index'),
            $journal->name => array('journals/view', 'id' => $journal->journal_id),
            'Отправить статью',
        );

        if (!$journal->isUserRegisteredIn(Yii::app()->user->info->user_id)) {

            // если пользователь не зарегистрирован в журнале, перенаправим на страницу регистрации в журнале.
            $this->redirect(array('journals/registration', 'id' => $journal->journal_id));
        }

        $this->renderJournalTemplate($journal->theme, 'articles/send', array(
            'journal' => $journal,
        ));
    }


	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Articles the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Articles::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
}
