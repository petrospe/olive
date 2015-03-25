<?php
/* @var $this AttributesController */
/* @var $model Attributes */

$this->breadcrumbs=array(
	'Attributes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Attributes', 'url'=>array('index')),
	array('label'=>'Create Attributes', 'url'=>array('create')),
	array('label'=>'Update Attributes', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Attributes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Attributes', 'url'=>array('admin')),
);
?>

<h1>View Attributes #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'description',
		'description_en',
	),
)); ?>
