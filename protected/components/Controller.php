<?php

class Controller extends CController
{
	public $layout = '//layouts/column1';

	public $menu = array();

	public $breadcrumbs = array();

    /*
     * Рендер страницы с использованием шаблона, указанного в $path
     * @param string $path путь к шаблону
     * @param array $data массив данных, которые будут переданы
     * @return void
     */
    public function renderByPath($path, array $data = array())
    {
        $output=$this->renderPartial($view,$data,true);
        if(($layoutFile=$this->getLayoutFile($this->layout))!==false)
            $output = $this->renderFile($layoutFile, array('content' => $output), true);

        echo $output;
    }
}