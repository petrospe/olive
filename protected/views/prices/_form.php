<?php
/* @var $this PricesController */
/* @var $model Prices */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'prices-form',
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
		<?php echo $form->labelEx($model,'individuals'); ?>
		<?php echo $form->textField($model,'individuals'); ?>
		<?php echo $form->error($model,'individuals'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'companies'); ?>
		<?php echo $form->textField($model,'companies'); ?>
		<?php echo $form->error($model,'companies'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'initialind'); ?>
		<?php echo $form->textField($model,'initialind'); ?>
		<?php echo $form->error($model,'initialind'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'initialcom'); ?>
		<?php echo $form->textField($model,'initialcom'); ?>
		<?php echo $form->error($model,'initialcom'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NoDiscountInd'); ?>
		<?php echo $form->textField($model,'NoDiscountInd'); ?>
		<?php echo $form->error($model,'NoDiscountInd'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NoDiscountCom'); ?>
		<?php echo $form->textField($model,'NoDiscountCom'); ?>
		<?php echo $form->error($model,'NoDiscountCom'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lawyers'); ?>
		<?php echo $form->textField($model,'lawyers'); ?>
		<?php echo $form->error($model,'lawyers'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'practicingLawyers'); ?>
		<?php echo $form->textField($model,'practicingLawyers'); ?>
		<?php echo $form->error($model,'practicingLawyers'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'laywerCompanies'); ?>
		<?php echo $form->textField($model,'laywerCompanies'); ?>
		<?php echo $form->error($model,'laywerCompanies'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NoDiscountLCom'); ?>
		<?php echo $form->textField($model,'NoDiscountLCom'); ?>
		<?php echo $form->error($model,'NoDiscountLCom'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'newLawyers'); ?>
		<?php echo $form->textField($model,'newLawyers'); ?>
		<?php echo $form->error($model,'newLawyers'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NoDiscountNLaw'); ?>
		<?php echo $form->textField($model,'NoDiscountNLaw'); ?>
		<?php echo $form->error($model,'NoDiscountNLaw'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'students'); ?>
		<?php echo $form->textField($model,'students'); ?>
		<?php echo $form->error($model,'students'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'accountants'); ?>
		<?php echo $form->textField($model,'accountants'); ?>
		<?php echo $form->error($model,'accountants'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'practicingAccountants'); ?>
		<?php echo $form->textField($model,'practicingAccountants'); ?>
		<?php echo $form->error($model,'practicingAccountants'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'discountExpiration'); ?>
                <?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                    'name'=>'discountExpiration',
                    'attribute'=>'discountExpiration',
                    'model'=>$model,
                    'options'=>array(
                        'dateFormat'=>'yy-mm-dd',
                        'altFormat'=>'yy-mm-dd',
                        'changeMonth'=>true,
                        'changeYear'=>true,
                        'appendText'=>'yyyy-mm-dd',
                    ),
                    )); ?>
		<?php echo $form->error($model,'discountExpiration'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'discountTitle'); ?>
		<?php echo $form->textField($model,'discountTitle',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'discountTitle'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'discountTitle_en'); ?>
		<?php echo $form->textField($model,'discountTitle_en',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'discountTitle_en'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'discountCode'); ?>
		<?php echo $form->textField($model,'discountCode',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'discountCode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'discountCode_en'); ?>
		<?php echo $form->textField($model,'discountCode_en',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'discountCode_en'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'discountPercentage'); ?>
		<?php echo $form->textField($model,'discountPercentage'); ?>
		<?php echo $form->error($model,'discountPercentage'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ShowFrontPage'); ?>
		<?php echo $form->checkbox($model,'ShowFrontPage'); ?>
		<?php echo $form->error($model,'ShowFrontPage'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'discountLabel'); ?>
		<?php echo $form->textField($model,'discountLabel',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'discountLabel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'discountLabel_en'); ?>
		<?php echo $form->textField($model,'discountLabel_en',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'discountLabel_en'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->