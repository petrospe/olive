<?php
/* @var $this AssociatesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Associates',
);

$this->menu=array(
	array('label'=>'Create Associates', 'url'=>array('create')),
	array('label'=>'Manage Associates', 'url'=>array('admin')),
);
?>

<h1>Associates</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
