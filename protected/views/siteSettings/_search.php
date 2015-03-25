<?php
/* @var $this SiteSettingsController */
/* @var $model SiteSettings */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'site_id'); ?>
		<?php echo $form->textField($model,'site_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'about_us'); ?>
		<?php echo $form->textArea($model,'about_us',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'about_us_en'); ?>
		<?php echo $form->textArea($model,'about_us_en',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'about_us_URL'); ?>
		<?php echo $form->textField($model,'about_us_URL',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'footer'); ?>
		<?php echo $form->textArea($model,'footer',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'footer_en'); ?>
		<?php echo $form->textArea($model,'footer_en',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->