<?php
/* @var $this SeminarsController */
/* @var $model Seminars */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'seminars-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'product_id'); ?>
		<?php echo $form->textField($model,'product_id'); ?>
		<?php echo $form->error($model,'product_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'startdate'); ?>
		<?php echo $form->textField($model,'startdate',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'startdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'duration'); ?>
		<?php echo $form->textField($model,'duration',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'duration'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'publicdate'); ?>
		<?php echo $form->textField($model,'publicdate'); ?>
		<?php echo $form->error($model,'publicdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'demovideo'); ?>
		<?php echo $form->textField($model,'demovideo',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'demovideo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->