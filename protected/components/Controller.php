<?php

class Controller extends CController
{
	public $layout = '//layouts/column1/';

	public $menu = array();

	public $breadcrumbs = array();

    public function renderJournalTemplate($theme, $template, array $params)
    {
        $path = $theme . '/' . $template . '.html';

        if (!file_exists(YiiBase::getPathOfAlias('webroot') . 'protected/' . $path)) {
            $path = 'default/' . $template . '.html';
        }

        $this->renderFile($path, array() + $params);
    }
}