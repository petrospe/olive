<?php
/* @var $this PricesController */
/* @var $model Prices */
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
		<?php echo $form->label($model,'individuals'); ?>
		<?php echo $form->textField($model,'individuals'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'companies'); ?>
		<?php echo $form->textField($model,'companies'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'initialind'); ?>
		<?php echo $form->textField($model,'initialind'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'initialcom'); ?>
		<?php echo $form->textField($model,'initialcom'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NoDiscountInd'); ?>
		<?php echo $form->textField($model,'NoDiscountInd'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NoDiscountCom'); ?>
		<?php echo $form->textField($model,'NoDiscountCom'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lawyers'); ?>
		<?php echo $form->textField($model,'lawyers'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'practicingLawyers'); ?>
		<?php echo $form->textField($model,'practicingLawyers'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'laywerCompanies'); ?>
		<?php echo $form->textField($model,'laywerCompanies'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NoDiscountLCom'); ?>
		<?php echo $form->textField($model,'NoDiscountLCom'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'newLawyers'); ?>
		<?php echo $form->textField($model,'newLawyers'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NoDiscountNLaw'); ?>
		<?php echo $form->textField($model,'NoDiscountNLaw'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'students'); ?>
		<?php echo $form->textField($model,'students'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'accountants'); ?>
		<?php echo $form->textField($model,'accountants'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'practicingAccountants'); ?>
		<?php echo $form->textField($model,'practicingAccountants'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'discountExpiration'); ?>
		<?php echo $form->textField($model,'discountExpiration'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'discountTitle'); ?>
		<?php echo $form->textField($model,'discountTitle',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'discountTitle_en'); ?>
		<?php echo $form->textField($model,'discountTitle_en',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'discountCode'); ?>
		<?php echo $form->textField($model,'discountCode',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'discountCode_en'); ?>
		<?php echo $form->textField($model,'discountCode_en',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'discountPercentage'); ?>
		<?php echo $form->textField($model,'discountPercentage'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ShowFrontPage'); ?>
		<?php echo $form->textField($model,'ShowFrontPage'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'discountLabel'); ?>
		<?php echo $form->textField($model,'discountLabel',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'discountLabel_en'); ?>
		<?php echo $form->textField($model,'discountLabel_en',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->