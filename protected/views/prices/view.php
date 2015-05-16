<?php
/* @var $this PricesController */
/* @var $model Prices */

$this->breadcrumbs=array(
	'Prices'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Prices', 'url'=>array('index')),
	//array('label'=>'Create Prices', 'url'=>array('create')),
	array('label'=>'Update Prices', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Prices', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Prices', 'url'=>array('admin')),
);
?>

<h1>View Prices #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'product_id',
		'individuals',
		'companies',
		'initialind',
		'initialcom',
		'NoDiscountInd',
		'NoDiscountCom',
		'lawyers',
		'practicingLawyers',
		'laywerCompanies',
		'NoDiscountLCom',
		'newLawyers',
		'NoDiscountNLaw',
		'students',
		'accountants',
		'practicingAccountants',
		'discountExpiration',
		'discountTitle',
		'discountTitle_en',
		'discountCode',
		'discountCode_en',
		'discountPercentage',
		'ShowFrontPage',
		'discountLabel',
		'discountLabel_en',
	),
)); ?>

    <?php echo CHtml::Button('Back to Product',array('submit'=>array('products/view','id'=>$model->product_id))); ?>