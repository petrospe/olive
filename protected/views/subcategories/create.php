<?php
/* @var $this SubcategoriesController */
/* @var $model Subcategories */

$this->breadcrumbs=array(
	'Subcategories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Subcategories', 'url'=>array('index')),
	array('label'=>'Manage Subcategories', 'url'=>array('admin')),
);
?>

<h1>Create Subcategories</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>