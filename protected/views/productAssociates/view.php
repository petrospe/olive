<?php
/* @var $this ProductAssociatesController */
/* @var $model ProductAssociates */

$this->breadcrumbs=array(
	'Product Associates'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ProductAssociates', 'url'=>array('index')),
	array('label'=>'Create ProductAssociates', 'url'=>array('create')),
	array('label'=>'Update ProductAssociates', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ProductAssociates', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProductAssociates', 'url'=>array('admin')),
);
?>

<h1>View ProductAssociates #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'product_id',
		'associate_id',
		'attribute_id',
		'ordering',
	),
)); ?>

 <?php echo CHtml::Button('Back to Product',array('submit'=>array('products/view','id'=>$model->product_id))); ?>