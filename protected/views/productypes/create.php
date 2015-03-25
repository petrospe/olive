<?php
/* @var $this ProductypesController */
/* @var $model Productypes */

$this->breadcrumbs=array(
	'Productypes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Productypes', 'url'=>array('index')),
	array('label'=>'Manage Productypes', 'url'=>array('admin')),
);
?>

<h1>Create Productypes</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>