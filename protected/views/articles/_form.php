<?php
/* @var $this ArticlesController */
/* @var $model Articles */
/* @var $form CActiveForm */
?>
<script src="<?php echo Yii::app()->baseUrl.'/ckeditor/ckeditor.js'; ?>"></script>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'articles-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
        
        <?php
                /*you can use here any find method you think 
                proper to return your data from db*/
                $sites = Sites::model()->findAll();

                // format models resulting using listData     
                $site_list = CHtml::listData($sites, 'id', 'description');
        ?>

	<div class="row">
		<?php echo $form->labelEx($model,'site_id'); ?>
		<?php echo $form->dropDownList($model,'site_id', $site_list); ?>
		<?php echo $form->error($model,'site_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>50,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title_en'); ?>
		<?php echo $form->textField($model,'title_en',array('size'=>50,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'title_en'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subtitle'); ?>
		<?php echo $form->textField($model,'subtitle',array('size'=>60,'maxlength'=>80, 'id'=>'editor1')); ?>
		<?php echo $form->error($model,'subtitle'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subtitle_en'); ?>
		<?php echo $form->textField($model,'subtitle_en',array('size'=>60,'maxlength'=>80, 'id'=>'editor2')); ?>
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

	<div class="row">
		<?php echo $form->labelEx($model,'active'); ?>
		<?php echo $form->checkBox($model,'active'); ?>
		<?php echo $form->error($model,'active'); ?>
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