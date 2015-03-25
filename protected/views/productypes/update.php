<?php
/* @var $this ProductypesController */
/* @var $model Productypes */

$this->breadcrumbs=array(
	'Productypes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Productypes', 'url'=>array('index')),
	array('label'=>'Create Productypes', 'url'=>array('create')),
	array('label'=>'View Productypes', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Productypes', 'url'=>array('admin')),
);
?>

<h1>Update Productypes <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>