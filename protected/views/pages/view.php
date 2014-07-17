<?php
/* @var $this PagesController */
/* @var $model StaticPages */

$this->breadcrumbs=array(
	'Static Pages'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List StaticPages', 'url'=>array('index')),
	array('label'=>'Create StaticPages', 'url'=>array('create')),
	array('label'=>'Update StaticPages', 'url'=>array('update', 'id'=>$model->static_page_id)),
	array('label'=>'Delete StaticPages', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->static_page_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage StaticPages', 'url'=>array('admin')),
);
?>

<h1>View StaticPages #<?php echo $model->static_page_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'static_page_id',
		'journal_id',
		'name',
		'html_file_path',
		'is_visible',
	),
)); ?>
