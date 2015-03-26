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

	<?php echo $form->errorSummary($publications); ?>
        <?php echo $form->errorSummary($prices); ?>
        
        <?php $productid = Yii::app()->request->getQuery('product_id'); ?>
        
	<div class="row">
		<?php echo $form->labelEx($publications,'product_id'); ?>
                <?php echo $form->textField($publications, 'product_id', array('readonly'=>true,'value'=>$productid)); ?>
		<?php echo $form->error($publications,'product_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($publications,'publication_series_id'); ?>
		<?php echo $form->dropDownList($publications,'publication_series_id', PublicationSeries::model() ->getTypeOptions(), array('empty'=>'--Select Series--')); ?>
		<?php echo $form->error($publications,'publication_series_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($publications,'serial'); ?>
		<?php echo $form->textField($publications,'serial',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($publications,'serial'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($publications,'pages'); ?>
		<?php echo $form->textField($publications,'pages'); ?>
		<?php echo $form->error($publications,'pages'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($publications,'vol'); ?>
		<?php echo $form->textField($publications,'vol',array('size'=>6,'maxlength'=>6)); ?>
		<?php echo $form->error($publications,'vol'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($publications,'year'); ?>
		<?php echo $form->textField($publications,'year',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($publications,'year'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($publications,'dimensions'); ?>
		<?php echo $form->textField($publications,'dimensions',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($publications,'dimensions'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($publications,'image'); ?>
		<?php echo $form->textField($publications,'image',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($publications,'image'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($publications,'abstract'); ?>
		<?php echo $form->textField($publications,'abstract',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($publications,'abstract'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($publications,'content'); ?>
		<?php echo $form->textField($publications,'content',array('size'=>50, 'maxlength'=>50)); ?>
		<?php echo $form->error($publications,'content'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($publications,'topSellers'); ?>
		<?php echo $form->textField($publications,'topSellers'); ?>
		<?php echo $form->error($publications,'topSellers'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($publications,'inprint'); ?>
		<?php echo $form->textField($publications,'inprint'); ?>
		<?php echo $form->error($publications,'inprint'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($publications,'publicdate'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                    'name'=>'publicdate',
                    'attribute'=>'publicdate',
                    'model'=>$publications,
                    'options'=>array(
                        'dateFormat'=>'yy-mm-dd',
                        'altFormat'=>'yy-mm-dd',
                        'changeMonth'=>true,
                        'changeYear'=>true,
                        'appendText'=>'yyyy-mm-dd',
                    ),
                    )); ?>
		<?php echo $form->error($publications,'publicdate'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($prices,'individuals'); ?>
		<?php echo $form->textField($prices,'individuals',array('size'=>4,'maxlength'=>10)); ?>
		<?php echo $form->error($prices,'individuals'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($prices,'companies'); ?>
		<?php echo $form->textField($prices,'companies',array('size'=>4,'maxlength'=>10)); ?>
		<?php echo $form->error($prices,'companies'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($prices,'initialind'); ?>
		<?php echo $form->textField($prices,'initialind',array('size'=>4,'maxlength'=>10)); ?>
		<?php echo $form->error($prices,'initialind'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($prices,'initialcom'); ?>
		<?php echo $form->textField($prices,'initialcom',array('size'=>4,'maxlength'=>10)); ?>
		<?php echo $form->error($prices,'initialcom'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($publications->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->