<?php
/* @var $this PricesController */
/* @var $data Prices */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('product_id')); ?>:</b>
	<?php echo CHtml::encode($data->product_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('individuals')); ?>:</b>
	<?php echo CHtml::encode($data->individuals); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('companies')); ?>:</b>
	<?php echo CHtml::encode($data->companies); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('initialind')); ?>:</b>
	<?php echo CHtml::encode($data->initialind); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('initialcom')); ?>:</b>
	<?php echo CHtml::encode($data->initialcom); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NoDiscountInd')); ?>:</b>
	<?php echo CHtml::encode($data->NoDiscountInd); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('NoDiscountCom')); ?>:</b>
	<?php echo CHtml::encode($data->NoDiscountCom); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lawyers')); ?>:</b>
	<?php echo CHtml::encode($data->lawyers); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('practicingLawyers')); ?>:</b>
	<?php echo CHtml::encode($data->practicingLawyers); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('laywerCompanies')); ?>:</b>
	<?php echo CHtml::encode($data->laywerCompanies); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NoDiscountLCom')); ?>:</b>
	<?php echo CHtml::encode($data->NoDiscountLCom); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('newLawyers')); ?>:</b>
	<?php echo CHtml::encode($data->newLawyers); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NoDiscountNLaw')); ?>:</b>
	<?php echo CHtml::encode($data->NoDiscountNLaw); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('students')); ?>:</b>
	<?php echo CHtml::encode($data->students); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('accountants')); ?>:</b>
	<?php echo CHtml::encode($data->accountants); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('practicingAccountants')); ?>:</b>
	<?php echo CHtml::encode($data->practicingAccountants); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('discountExpiration')); ?>:</b>
	<?php echo CHtml::encode($data->discountExpiration); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('discountTitle')); ?>:</b>
	<?php echo CHtml::encode($data->discountTitle); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('discountTitle_en')); ?>:</b>
	<?php echo CHtml::encode($data->discountTitle_en); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('discountCode')); ?>:</b>
	<?php echo CHtml::encode($data->discountCode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('discountCode_en')); ?>:</b>
	<?php echo CHtml::encode($data->discountCode_en); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('discountPercentage')); ?>:</b>
	<?php echo CHtml::encode($data->discountPercentage); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ShowFrontPage')); ?>:</b>
	<?php echo CHtml::encode($data->ShowFrontPage); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('discountLabel')); ?>:</b>
	<?php echo CHtml::encode($data->discountLabel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('discountLabel_en')); ?>:</b>
	<?php echo CHtml::encode($data->discountLabel_en); ?>
	<br />

	*/ ?>

</div>