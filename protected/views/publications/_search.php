<?php
/* @var $this PublicationsController */
/* @var $model Publications */
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
		<?php echo $form->label($model,'product_id'); ?>
		<?php echo $form->textField($model,'product_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'publication_series_id'); ?>
		<?php echo $form->textField($model,'publication_series_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'serial'); ?>
		<?php echo $form->textField($model,'serial',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pages'); ?>
		<?php echo $form->textField($model,'pages'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vol'); ?>
		<?php echo $form->textField($model,'vol',array('size'=>6,'maxlength'=>6)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'year'); ?>
		<?php echo $form->textField($model,'year',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dimensions'); ?>
		<?php echo $form->textField($model,'dimensions',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'image'); ?>
		<?php echo $form->textField($model,'image',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'abstract'); ?>
		<?php echo $form->textField($model,'abstract',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'content'); ?>
		<?php echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'topSellers'); ?>
		<?php echo $form->textField($model,'topSellers'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'inprint'); ?>
		<?php echo $form->textField($model,'inprint'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'publicdate'); ?>
		<?php echo $form->textField($model,'publicdate'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->