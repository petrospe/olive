<?php
/* @var $this SiteSettingsController */
/* @var $model SiteSettings */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'site-settings-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'site_id'); ?>
		<?php echo $form->textField($model,'site_id'); ?>
		<?php echo $form->error($model,'site_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'about_us'); ?>
		<?php echo $form->textArea($model,'about_us',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'about_us'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'about_us_en'); ?>
		<?php echo $form->textArea($model,'about_us_en',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'about_us_en'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'about_us_URL'); ?>
		<?php echo $form->textField($model,'about_us_URL',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'about_us_URL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'footer'); ?>
		<?php echo $form->textArea($model,'footer',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'footer'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'footer_en'); ?>
		<?php echo $form->textArea($model,'footer_en',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'footer_en'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->