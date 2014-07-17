<?php
/* @var $this PagesController */
/* @var $model StaticPages */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'static-pages-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'journal_id'); ?>
		<?php echo $form->textField($model,'journal_id'); ?>
		<?php echo $form->error($model,'journal_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'html_file_path'); ?>
		<?php echo $form->textField($model,'html_file_path',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'html_file_path'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_visible'); ?>
		<?php echo $form->textField($model,'is_visible'); ?>
		<?php echo $form->error($model,'is_visible'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->