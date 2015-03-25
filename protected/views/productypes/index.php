<?php
/* @var $this ProductypesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Productypes',
);

$this->menu=array(
	array('label'=>'Create Productypes', 'url'=>array('create')),
	array('label'=>'Manage Productypes', 'url'=>array('admin')),
);
?>

<h1>Productypes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
