<?php
/* @var $this ProductAssociatesController */
/* @var $model ProductAssociates */

$this->breadcrumbs=array(
	'Product Associates'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ProductAssociates', 'url'=>array('index')),
	array('label'=>'Manage ProductAssociates', 'url'=>array('admin')),
);
?>

<h1>Create ProductAssociates</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>