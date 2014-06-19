<?php
/* @var $this JournalsController */
/* @var $model Journals */

$this->breadcrumbs=array(
	'Journals'=>array('index'),
	$model->name=>array('view','id'=>$model->journal_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Journals', 'url'=>array('index')),
	array('label'=>'Create Journals', 'url'=>array('create')),
	array('label'=>'View Journals', 'url'=>array('view', 'id'=>$model->journal_id)),
	array('label'=>'Manage Journals', 'url'=>array('admin')),
);
?>

<h1>Update Journals <?php echo $model->journal_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>