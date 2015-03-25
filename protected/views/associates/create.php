<?php
/* @var $this AssociatesController */
/* @var $model Associates */

$this->breadcrumbs=array(
	'Associates'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Associates', 'url'=>array('index')),
	array('label'=>'Manage Associates', 'url'=>array('admin')),
);
?>

<h1>Create Associates</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>