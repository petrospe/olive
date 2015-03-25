<?php
/* @var $this PublicationSeriesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Publication Series',
);

$this->menu=array(
	array('label'=>'Create PublicationSeries', 'url'=>array('create')),
	array('label'=>'Manage PublicationSeries', 'url'=>array('admin')),
);
?>

<h1>Publication Series</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
