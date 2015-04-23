<?php
/* @var $this ProductSitesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Product Sites',
);

$this->menu=array(
	array('label'=>'Create ProductSites', 'url'=>array('create')),
	array('label'=>'Manage ProductSites', 'url'=>array('admin')),
);
?>

<h1>Product Sites</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
