<?php
/* @var $this JournalsController */
/* @var $model Journals */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'journals-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>1000)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'theme'); ?>
		<?php echo $form->textField($model,'theme',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'theme'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_languages'); ?>
		<?php echo $form->textField($model,'user_languages',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'user_languages'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->