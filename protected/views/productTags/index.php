<?php
/* @var $this ProductTagsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Product Tags',
);

$this->menu=array(
	array('label'=>'Create ProductTags', 'url'=>array('create')),
	array('label'=>'Manage ProductTags', 'url'=>array('admin')),
);
?>

<h1>Product Tags</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
