<?php
/* @var $this PublicationSeriesController */
/* @var $model PublicationSeries */

$this->breadcrumbs=array(
	'Publication Series'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List PublicationSeries', 'url'=>array('index')),
	array('label'=>'Create PublicationSeries', 'url'=>array('create')),
	array('label'=>'Update PublicationSeries', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete PublicationSeries', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PublicationSeries', 'url'=>array('admin')),
);
?>

<h1>View PublicationSeries #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'description',
		'description_en',
	),
)); ?>
