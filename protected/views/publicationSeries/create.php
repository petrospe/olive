<?php
/* @var $this PublicationSeriesController */
/* @var $model PublicationSeries */

$this->breadcrumbs=array(
	'Publication Series'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PublicationSeries', 'url'=>array('index')),
	array('label'=>'Manage PublicationSeries', 'url'=>array('admin')),
);
?>

<h1>Create PublicationSeries</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>