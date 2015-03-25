<?php
/* @var $this SiteSettingsController */
/* @var $data SiteSettings */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('site_id')); ?>:</b>
	<?php echo CHtml::encode($data->site_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('about_us')); ?>:</b>
	<?php echo CHtml::encode($data->about_us); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('about_us_en')); ?>:</b>
	<?php echo CHtml::encode($data->about_us_en); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('about_us_URL')); ?>:</b>
	<?php echo CHtml::encode($data->about_us_URL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('footer')); ?>:</b>
	<?php echo CHtml::encode($data->footer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('footer_en')); ?>:</b>
	<?php echo CHtml::encode($data->footer_en); ?>
	<br />


</div>