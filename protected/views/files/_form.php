<?php
/* @var $this FilesController */
/* @var $model Files */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'files-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
        'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
        
        <?php $product_id = Yii::app()->request->getQuery('product_id'); ?>

        <div class="row">
		<?php echo $form->labelEx($model,'product_id'); ?>
                <?php echo $form->textField($model, 'product_id', array('readonly'=>true,'value'=>$product_id)); ?>
		<?php echo $form->error($model,'product_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'file_category_id'); ?>
                <?php echo $form->dropDownList($model,'file_category_id', FilesCategories::model() ->getTypeOptions()); ?>
		<?php echo $form->error($model,'file_category__id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'filename_sys'); ?>
		<?php echo $form->fileField($model, 'filename_sys'); ?>
		<?php echo $form->error($model,'filename_sys'); ?>
        </div>
        
        <div class="row">
		<?php echo $form->labelEx($model,'filename'); ?>
                <?php echo $form->textField($model, 'filename', array('readonly'=>true)); ?>
		<?php echo $form->error($model,'filename'); ?>
                <!-- File attributes -->
                <?php echo $form->hiddenField($model,'filename'); ?>
		<?php echo $form->hiddenField($model,'file_type'); ?>
		<?php echo $form->hiddenField($model,'file_size'); ?>
		<?php echo $form->hiddenField($model,'file_path'); ?>
		<?php echo $form->hiddenField($model,'create_date'); ?>
		<?php echo $form->hiddenField($model,'modification_date'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->