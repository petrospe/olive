<?php
/* @var $this AssociatesController */
/* @var $model Associates */

$this->breadcrumbs=array(
	'Associates'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Associates', 'url'=>array('index')),
	array('label'=>'Create Associates', 'url'=>array('create')),
	array('label'=>'Update Associates', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Associates', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Associates', 'url'=>array('admin')),
);
?>

<h1>View Associates #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'first_name',
		'first_name_en',
		'last_name',
		'last_name_en',
                'title',
	),
)); ?>
