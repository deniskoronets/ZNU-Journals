<?php

class SiteController extends Controller
{
    public $layout='//layouts/column1';

    public function actionIndex()
    {
        $this->render('index');
    }

    /**** регистрация ***/
    public function actionRegistration()
    {
        $this->render('registration');
    }

    /**** авторизация ***/
    public function actionLogin()
    {
        $model = new LoginForm;

		// collect user input data
		if (isset($_POST['LoginForm'])) {
			$model->attributes=$_POST['LoginForm'];

			if($model->validate() && $model->login()) {
				$this->redirect(Yii::app()->user->returnUrl);
            }
		}

		$this->render('login', array('model' => $model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();

		$this->redirect(Yii::app()->homeUrl);
    }

    public function actionError()
    {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest) {
                echo $error['message'];
            } else {
                $this->render('error', $error);
            }
        }
    }
}
