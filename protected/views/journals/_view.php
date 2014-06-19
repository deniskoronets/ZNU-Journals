<?php
/* @var $this JournalsController */
/* @var $data Journals */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('journal_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->journal_id), array('view', 'id'=>$data->journal_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('theme')); ?>:</b>
	<?php echo CHtml::encode($data->theme); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_languages')); ?>:</b>
	<?php echo CHtml::encode($data->user_languages); ?>
	<br />


</div>