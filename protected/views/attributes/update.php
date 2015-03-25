<?php
/* @var $this AttributesController */
/* @var $model Attributes */

$this->breadcrumbs=array(
	'Attributes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Attributes', 'url'=>array('index')),
	array('label'=>'Create Attributes', 'url'=>array('create')),
	array('label'=>'View Attributes', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Attributes', 'url'=>array('admin')),
);
?>

<h1>Update Attributes <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>