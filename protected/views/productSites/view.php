<?php
/* @var $this ProductSitesController */
/* @var $model ProductSites */

$this->breadcrumbs=array(
	'Product Sites'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ProductSites', 'url'=>array('index')),
	array('label'=>'Create ProductSites', 'url'=>array('create')),
	array('label'=>'Update ProductSites', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ProductSites', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProductSites', 'url'=>array('admin')),
);
?>

<h1>View ProductSites #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'site_id',
		'product_id',
	),
)); ?>

    <?php echo CHtml::Button('Back to Product',array('submit'=>array('products/view','id'=>$model->product_id))); ?>