<?php
/* @var $this SubcategoriesController */
/* @var $model Subcategories */

$this->breadcrumbs=array(
	'Subcategories'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Subcategories', 'url'=>array('index')),
	array('label'=>'Create Subcategories', 'url'=>array('create')),
	array('label'=>'View Subcategories', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Subcategories', 'url'=>array('admin')),
);
?>

<h1>Update Subcategories <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>