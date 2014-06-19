<?php
/* @var $this JournalsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Journals',
);

$this->menu=array(
	array('label'=>'Информация о страницах', 'url'=>array('create')),
	array('label'=>'Еще бурда какая-то', 'url'=>array('admin')),
);
?>

<h1>Journals</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=> $journals,
	'itemView'=>'_view',
)); ?>

<style>
    .bordered {
        border: 1px solid gray;
        padding: 5px 20px;
        border-radius: 10px;
    }
</style>