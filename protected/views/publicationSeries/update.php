<?php
/* @var $this PublicationSeriesController */
/* @var $model PublicationSeries */

$this->breadcrumbs=array(
	'Publication Series'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PublicationSeries', 'url'=>array('index')),
	array('label'=>'Create PublicationSeries', 'url'=>array('create')),
	array('label'=>'View PublicationSeries', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage PublicationSeries', 'url'=>array('admin')),
);
?>

<h1>Update PublicationSeries <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>