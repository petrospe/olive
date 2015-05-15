<?php
/* @var $this ProductTagsController */
/* @var $model ProductTags */

$this->breadcrumbs=array(
	'Product Tags'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ProductTags', 'url'=>array('index')),
	array('label'=>'Create ProductTags', 'url'=>array('create')),
	array('label'=>'Update ProductTags', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ProductTags', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProductTags', 'url'=>array('admin')),
);
?>

<h1>View ProductTags #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'product_id',
		'tag_id',
	),
)); ?>

<?php echo CHtml::Button('Back to Product',array('submit'=>array('products/view','id'=>$model->product_id))); ?>