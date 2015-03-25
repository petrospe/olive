<?php
/* @var $this ProductypesController */
/* @var $model Productypes */

$this->breadcrumbs=array(
	'Productypes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Productypes', 'url'=>array('index')),
	array('label'=>'Create Productypes', 'url'=>array('create')),
	array('label'=>'Update Productypes', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Productypes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Productypes', 'url'=>array('admin')),
);
?>

<h1>View Productypes #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'description',
		'description_en',
	),
)); ?>
