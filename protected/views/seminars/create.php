<?php
/* @var $this SeminarsController */
/* @var $model Seminars */

$this->breadcrumbs=array(
	'Seminars'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Seminars', 'url'=>array('index')),
	array('label'=>'Manage Seminars', 'url'=>array('admin')),
);
?>

<h1>Create Seminars</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>