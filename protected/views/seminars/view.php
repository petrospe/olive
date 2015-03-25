<?php
/* @var $this SeminarsController */
/* @var $model Seminars */

$this->breadcrumbs=array(
	'Seminars'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Seminars', 'url'=>array('index')),
	array('label'=>'Create Seminars', 'url'=>array('create')),
	array('label'=>'Update Seminars', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Seminars', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Seminars', 'url'=>array('admin')),
);
?>

<h1>View Seminars #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'product_id',
		'startdate',
		'duration',
		'publicdate',
		'demovideo',
	),
)); ?>
