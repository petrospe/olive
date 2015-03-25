<?php
/* @var $this ClassifiedsCategoriesController */
/* @var $data ClassifiedsCategories */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vieworder')); ?>:</b>
	<?php echo CHtml::encode($data->vieworder); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('isactive')); ?>:</b>
	<?php echo CHtml::encode($data->isactive); ?>
	<br />


</div>