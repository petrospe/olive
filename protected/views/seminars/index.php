<?php
/* @var $this SeminarsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Seminars',
);

$this->menu=array(
	array('label'=>'Create Seminars', 'url'=>array('create')),
	array('label'=>'Manage Seminars', 'url'=>array('admin')),
);
?>

<h1>Seminars</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
