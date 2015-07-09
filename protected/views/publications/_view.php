<?php
/* @var $this PublicationsController */
/* @var $data Publications */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('product_id')); ?>:</b>
	<?php echo CHtml::encode($data->product_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('publication_series_id')); ?>:</b>
	<?php echo CHtml::encode($data->publication_series_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('serial')); ?>:</b>
	<?php echo CHtml::encode($data->serial); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pages')); ?>:</b>
	<?php echo CHtml::encode($data->pages); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vol')); ?>:</b>
	<?php echo CHtml::encode($data->vol); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('year')); ?>:</b>
	<?php echo CHtml::encode($data->year); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('dimensions')); ?>:</b>
	<?php echo CHtml::encode($data->dimensions); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('topSellers')); ?>:</b>
	<?php echo CHtml::encode($data->topSellers); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('inprint')); ?>:</b>
	<?php echo CHtml::encode($data->inprint); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('publicdate')); ?>:</b>
	<?php echo CHtml::encode($data->publicdate); ?>
	<br />

	*/ ?>

</div>