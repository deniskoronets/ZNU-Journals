<?php

class JournalsController extends Controller
{
	public $layout='//layouts/column1';

	public function filters()
	{
		return array(
			'accessControl',
		);
	}

    /**
     * Права доступа к страницам
     */
	public function accessRules()
	{
		return array(
			array('allow',
				'actions' => array('index', 'view', 'registration'),
				'users' => array('*'),
			),
			array('deny',
				'users' => array('*'),
			),
		);
	}

    /**
     * Просмотр конкретного журнала
     * Генерация с помощью TWIG
     * @param int $journalId - ID журнала
     */
	public function actionView($journalId)
	{
		$journal = $this->loadModel($journalId);

        $this->breadcrumbs = array(
            'Журналы' => array('index'),
            $journal->name,
        );

        // дополнительный страницы журнала
        $specialPages = array(
            /* array(
                'name' => 'Регистрация в журнале',
                'url'  => $this->createUrl('journals/registration', array('journalId' => $journalId)),
            ), */
            array(
                'name' => 'Отправить статью',
                'url'  => $this->createUrl('articles/send', array('id' => $journalId)),
            ),
        );

        // года
        $years = array();
        for ($i = 2010; $i <= 2014 && $years[] = $i; $i++);

        // постраничный вывод
        $criteria = new CDbCriteria();
        $criteria->condition = 'journal_id = :journalId';
        $criteria->params = array('journalId' => $journalId);

        // поиск
        $searchedText = '';
        $searchedYear = '';

        if (!empty($_POST)) {
            $searchedText = $_POST['search'];
            $searchedYear = (int)$_POST['year'];

            $criteria->condition .= ' AND name LIKE :name AND year = :year';
            $criteria->params['name'] = '%' . $_POST['search'] . '%';
            $criteria->params['year'] = (int)$_POST['year'];
        }

        $count = Issues::model()->count($criteria);
        $pages = new CPagination($count);
        $pages->pageSize = 15; // кол-во журналов на странице
        $pages->applyLimit($criteria);
        $issues = Issues::model()->findAll($criteria);

        $this->renderJournalTemplate($journal->theme, 'journals/view', array(
            'journal'      => $journal,
            'specialPages' => $specialPages,

            // постраничный вывод выпусков
            'issues'         => $issues,
            'issuesNumPages' => $pages,

            // для поиска
            'searchedText'   => $searchedText,
            'searchedYear'   => $searchedYear,
            'years'          => $years,
        ));
	}

    /**
     * Список всех журналов
     */
	public function actionIndex()
	{
		$journals = Journals::model()->findAll();

        $this->breadcrumbs = array(
            'Журналы',
        );

        $this->render('index', array(
			'journals' => $journals,
		));
	}

    /**
      * Регистрация в журнале
      * Генерация с помощью TWIG
      * @param int $journalId - ID журнала
      */
    public function actionRegistration($journalId)
    {
        $journal = $this->loadModel($journalId);

        $this->breadcrumbs = array(
            'Журналы' => array('index'),
            $journal->name,
        );

        // действия с регистрацией

        $this->renderJournalTemplate($journal->theme, 'journals/registration', array(
            'journal' => $journal,
        ));
    }

    /**
     * Функция для подгрузки журнала (экземпляра модели)
     * @param int $id - ID журнала
     */
	public function loadModel($journalId)
	{
		$model = Journals::model()->findByPk($journalId);

		if ($model === null) {
			throw new CHttpException(404, 'The requested page does not exist.');
        }

		return $model;
	}
}
