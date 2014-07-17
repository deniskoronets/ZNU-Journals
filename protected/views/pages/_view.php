<?php
/* @var $this PagesController */
/* @var $data StaticPages */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('static_page_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->static_page_id), array('view', 'id'=>$data->static_page_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('journal_id')); ?>:</b>
	<?php echo CHtml::encode($data->journal_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('html_file_path')); ?>:</b>
	<?php echo CHtml::encode($data->html_file_path); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_visible')); ?>:</b>
	<?php echo CHtml::encode($data->is_visible); ?>
	<br />


</div>