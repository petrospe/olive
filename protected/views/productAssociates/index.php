<?php
/* @var $this ProductAssociatesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Product Associates',
);

$this->menu=array(
	array('label'=>'Create ProductAssociates', 'url'=>array('create')),
	array('label'=>'Manage ProductAssociates', 'url'=>array('admin')),
);
?>

<h1>Product Associates</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
