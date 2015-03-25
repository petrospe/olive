<?php
/* @var $this PublicationsController */
/* @var $model Publications */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'publications-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
        
        <?php $productid = Yii::app()->request->getQuery('product_id'); ?>
        
	<div class="row">
		<?php echo $form->labelEx($model,'product_id'); ?>
                <?php echo $form->textField($model, 'product_id', array('readonly'=>true,'value'=>$productid)); ?>
		<?php echo $form->error($model,'product_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'publication_series_id'); ?>
		<?php echo $form->textField($model,'publication_series_id'); ?>
		<?php echo $form->error($model,'publication_series_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'serial'); ?>
		<?php echo $form->textField($model,'serial',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'serial'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pages'); ?>
		<?php echo $form->textField($model,'pages'); ?>
		<?php echo $form->error($model,'pages'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vol'); ?>
		<?php echo $form->textField($model,'vol',array('size'=>6,'maxlength'=>6)); ?>
		<?php echo $form->error($model,'vol'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'year'); ?>
		<?php echo $form->textField($model,'year',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'year'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dimensions'); ?>
		<?php echo $form->textField($model,'dimensions',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'dimensions'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'image'); ?>
		<?php echo $form->textField($model,'image',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'image'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'abstract'); ?>
		<?php echo $form->textField($model,'abstract',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'abstract'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'content'); ?>
		<?php echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'content'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'topSellers'); ?>
		<?php echo $form->textField($model,'topSellers'); ?>
		<?php echo $form->error($model,'topSellers'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'inprint'); ?>
		<?php echo $form->textField($model,'inprint'); ?>
		<?php echo $form->error($model,'inprint'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'publicdate'); ?>
		<?php echo $form->textField($model,'publicdate'); ?>
		<?php echo $form->error($model,'publicdate'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->