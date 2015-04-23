<?php
/* @var $this ProductSitesController */
/* @var $model ProductSites */

$this->breadcrumbs=array(
	'Product Sites'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ProductSites', 'url'=>array('index')),
	array('label'=>'Manage ProductSites', 'url'=>array('admin')),
);
?>

<h1>Create ProductSites</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>