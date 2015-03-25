<?php
/* @var $this SeminarsController */
/* @var $data Seminars */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('product_id')); ?>:</b>
	<?php echo CHtml::encode($data->product_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('startdate')); ?>:</b>
	<?php echo CHtml::encode($data->startdate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('duration')); ?>:</b>
	<?php echo CHtml::encode($data->duration); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('publicdate')); ?>:</b>
	<?php echo CHtml::encode($data->publicdate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('demovideo')); ?>:</b>
	<?php echo CHtml::encode($data->demovideo); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('live')); ?>:</b>
	<?php echo CHtml::encode($data->live); ?>
	<br />

	*/ ?>

</div>