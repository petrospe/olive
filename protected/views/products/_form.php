<?php
/* @var $this ProductsController */
/* @var $model Products */
/* @var $form CActiveForm */
?>
<script src="<?php echo Yii::app()->baseUrl.'/ckeditor/ckeditor.js'; ?>"></script>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'products-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'atlantis_id'); ?>
		<?php echo $form->textField($model,'atlantis_id'); ?>
		<?php echo $form->error($model,'atlantis_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'productype_id'); ?>
		<?php echo $form->dropDownList($model,'productype_id', Productypes::model() ->getTypeOptions()); ?>
		<?php echo $form->error($model,'productype_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'parent_id'); ?>
		<?php echo $form->dropDownList($model,
                 'parent_id',
                  CHtml::listData(Products::model()->findAll(), 'id', 'title'), 
                  array('prompt' => '-- None--')); ?>
		<?php echo $form->error($model,'parent_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title_en'); ?>
		<?php echo $form->textField($model,'title_en',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'title_en'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'titleSEO'); ?>
		<?php echo $form->textField($model,'titleSEO',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'titleSEO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subtitle'); ?>
		<?php echo $form->textArea($model,'subtitle',array('rows'=>6, 'cols'=>50, 'id'=>'editor1')); ?>
		<?php echo $form->error($model,'subtitle'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subtitle_en'); ?>
		<?php echo $form->textArea($model,'subtitle_en',array('rows'=>6, 'cols'=>50, 'id'=>'editor2')); ?>
		<?php echo $form->error($model,'subtitle_en'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50, 'id'=>'editor3')); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description_en'); ?>
		<?php echo $form->textArea($model,'description_en',array('rows'=>6, 'cols'=>50, 'id'=>'editor4')); ?>
		<?php echo $form->error($model,'description_en'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'active'); ?>
		<?php echo $form->checkBox($model,'active'); ?>
		<?php echo $form->error($model,'active'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'updated'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                    'name'=>'updated',
                    'attribute'=>'updated',
                    'model'=>$model,
                    'options'=>array(
                        'dateFormat'=>'yy-mm-dd',
                        'altFormat'=>'yy-mm-dd',
                        'changeMonth'=>true,
                        'changeYear'=>true,
                        'appendText'=>'yyyy-mm-dd',
                    ),
                    )); ?>
		<?php echo $form->error($model,'updated'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

<script type="text/javascript">
    CKEDITOR.replace( 'editor1' );
    CKEDITOR.replace( 'editor2' );
    CKEDITOR.replace( 'editor3' );
    CKEDITOR.replace( 'editor4' );
</script>
</div><!-- form -->