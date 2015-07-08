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
		<?php echo $form->dropDownList($model,'publication_series_id', PublicationSeries::model() ->getTypeOptions(), array('empty'=>'--Select Series--')); ?>
		<?php echo $form->error($model,'publication_series_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'serial'); ?>
		<?php echo $form->textField($model,'serial',array('size'=>20,'maxlength'=>20, 'placeholder'=>'123-456-789 or 1234-5678')); ?>
		<?php echo $form->error($model,'serial'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pages'); ?>
		<?php echo $form->textField($model,'pages',array('placeholder'=>'Page number')); ?>
		<?php echo $form->error($model,'pages'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vol'); ?>
		<?php echo $form->textField($model,'vol',array('size'=>6,'maxlength'=>6, 'placeholder'=>'2η')); ?>
		<?php echo $form->error($model,'vol'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'year'); ?>
		<?php echo $form->textField($model,'year',array('size'=>4,'maxlength'=>4, 'placeholder'=>'2015')); ?>
		<?php echo $form->error($model,'year'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dimensions'); ?>
		<?php echo $form->textField($model,'dimensions',array('size'=>10,'maxlength'=>10, 'placeholder'=>'17 x 24')); ?>
		<?php echo $form->error($model,'dimensions'); ?>
	</div>

	<div class="row">
                <?php echo $form->labelEx($model,'image'); ?>
		<?php echo CHtml::Button('Add Image',array('submit'=>array('files/create','item_id'=>$model->id))); ?>
                <?php echo $form->error($model,'image'); ?>
	</div>
        <?php if($model->isNewRecord!='1'){ ?>
        <div class="row">
             <?php echo $model->image; ?>
        </div>
        <?php } ?>
	<div class="row">
		<?php echo $form->labelEx($model,'abstract'); ?>
                <?php echo CHtml::Button('Add Abstract',array('submit'=>array('files/create','item_id'=>$model->id))); ?>
		<?php echo $form->error($model,'abstract'); ?>
	</div>
        <?php if($model->isNewRecord!='1'){ ?>
        <div class="row">
             <?php echo $model->abstract; ?>
        </div>
        <?php } ?>
	<div class="row">
		<?php echo $form->labelEx($model,'content'); ?>
		<?php echo CHtml::Button('Add Content',array('submit'=>array('files/create','item_id'=>$model->id))); ?>
		<?php echo $form->error($model,'content'); ?>
	</div>
        <?php if($model->isNewRecord!='1'){ ?>
        <div class="row">
             <?php echo $model->content; ?>
        </div>
        <?php } ?>
	<div class="row">
		<?php echo $form->labelEx($model,'topSellers'); ?>
		<?php echo $form->textField($model,'topSellers',array('placeholder'=>'1 - 5 or nothing')); ?>
		<?php echo $form->error($model,'topSellers'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'inprint'); ?>
		<?php echo $form->checkbox($model,'inprint'); ?>
		<?php echo $form->error($model,'inprint'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'publicdate'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                    'name'=>'publicdate',
                    'attribute'=>'publicdate',
                    'model'=>$model,
                    'options'=>array(
                        'dateFormat'=>'yy-mm-dd',
                        'altFormat'=>'yy-mm-dd',
                        'changeMonth'=>true,
                        'changeYear'=>true,
                        'appendText'=>'yyyy-mm-dd',
                    ),
                    )); ?>
		<?php echo $form->error($model,'publicdate'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->