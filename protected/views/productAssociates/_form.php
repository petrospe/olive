<?php
/* @var $this ProductAssociatesController */
/* @var $model ProductAssociates */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'product-associates-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
        
        <?php $productid = Yii::app()->request->getQuery('product_id');

                /*you can use here any find method you think 
                proper to return your data from db*/
                $associates = Associates::model()->findAll();
                $attributes = Attributes::model()->findAll();

                // format models resulting using listData     
                $associates_list = CHtml::listData($associates, 'id', 'last_name');
                $attributes_list = CHtml::listData($attributes, 'id', 'description');
        ?>

	<div class="row">
		<?php echo $form->labelEx($model,'product_id'); ?>
		<?php echo $form->textField($model,'product_id', array('readonly'=>true,'value'=>$productid)); ?>
		<?php echo $form->error($model,'product_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'associate_id'); ?>
		<?php echo $form->dropDownList($model,'associate_id', $associates_list); ?>
		<?php echo $form->error($model,'associate_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'attribute_id'); ?>
		<?php echo $form->dropDownList($model,'attribute_id', $attributes_list); ?>
		<?php echo $form->error($model,'attribute_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ordering'); ?>
		<?php echo $form->textField($model,'ordering'); ?>
		<?php echo $form->error($model,'ordering'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->