<?php
/* @var $this PagesController */
/* @var $model StaticPages */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'static_page_id'); ?>
		<?php echo $form->textField($model,'static_page_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'journal_id'); ?>
		<?php echo $form->textField($model,'journal_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'html_file_path'); ?>
		<?php echo $form->textField($model,'html_file_path',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'is_visible'); ?>
		<?php echo $form->textField($model,'is_visible'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->